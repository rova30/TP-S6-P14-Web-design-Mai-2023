<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Historique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function findAllArticles()
    {
        return Article::all();
    }

    public function findAllArticleNotYetValidate()
    {
        return Article::where('validepar', '=', null)
            ->where('dateheurevalidation', '=', null)
            ->get();
    }

    public function findAllArticleNotYetPublished()
    {
        return Article::where('validepar', '!=', null)
            ->where('dateheurevalidation', '!=', null)
            ->where('dateheurepublication', '=', null)
            ->get();
    }

    public function findAllArticlePublished()
    {
        return Article::where('validepar', '!=', null)
            ->where('dateheurevalidation', '!=', null)
            ->where('dateheurepublication', '!=', null)
            ->get();
    }


    public function articleFormPage()
    {
        return view('articleFormPage');
    }

    public function createArticle(Request $request)
    {
        $titre = request('titre');
        $resume = request('resume');
        $contenu = request('contenu');
        $utilisateur = session()->get('redacteur');

        if ($titre == null) {
            return redirect()->back()->with('error', 'Veuillez ajouter un titre.');
        }

        if ($resume == null) {
            return redirect()->back()->with('error', 'Veuillez ajouter un résumé.');
        }

        if ($contenu == null) {
            return redirect()->back()->with('error', 'Veuillez ajouter un contenu.');
        }

        if ($request->hasFile('image')) {
            // Récupération de l'image depuis la requête
            $path = $request->file('image')->store('public/images');
            $filename = basename($path);

            $file = storage_path('app/' . $path);
            $contents = file_get_contents($file);
            $base64 = base64_encode($contents);

            // Création de l'article
            $article = new Article;
            $article->redacteur_id = $utilisateur[0]->id;
            $article->titre = $titre;
            $article->resume = $resume;
            $article->contenu = $contenu;
            $article->img = 'data:image/jpeg;base64,' . $base64;
            // Enregistrement de l'article dans la base de données
            $article->save();
        } else if (!$request->hasFile('image')) {
            return redirect()->back()->with('error', 'Veuillez ajouter une image.');
        }

        return redirect()->back()->with('success', 'Nouvel article crée.');

    }

    public function getArticleById($url)
    {
        $parts = explode("-", $url);
        return Article::find($parts[count($parts) - 1]);
    }

    public function validateArticle($id)
    {
        $redacteurchef = session()->get('redacteurchef');
        $article = Article::find($id);
        $article->validepar = $redacteurchef[0]->id;
        $article->dateheurevalidation = Date::now()->toDateTimeString();
        $article->save();
        return redirect()->route('redacteur-chef')->with('success', 'Le contenu a été validé avec succés.');
    }

    public function updateArticle($id)
    {
        $redacteurchef = session()->get('redacteurchef');
        $contenu = request('contenu');
        $article = Article::find($id);
        $article->contenu = $contenu;
        $article->validepar = $redacteurchef[0]->id;
        $article->dateheurevalidation = Date::now()->toDateTimeString();

        Historique::create([
            'article_id' => $article->id,
            'utilisateur_id' => $redacteurchef[0]->id,
            'dateheuremodification' => Date::now()->toDateTimeString(),
            'contenu' => $article->contenu,
            'typemodification' => 'Modification'
        ]);

        $article->save();
        return redirect()->back()->with('success', 'Le contenu a été validé et modifié avec succés.');
    }

    public function publishArticle($id)
    {
        $admin = session()->get('admin');
        $article = Article::find($id);
        $article->publiepar = $admin[0]->id;
        $article->dateheurepublication = Date::now()->toDateTimeString();
        $article->save();
        return redirect()->route('administrateur')->with('success', 'Le contenu a été publié avec succés.');
    }

    public function unpublishArticle($id)
    {
        $article = Article::find($id);
        $article->validepar = null;
        $article->dateheurevalidation = null;
        $article->publiepar = null;
        $article->dateheurepublication = null;
        $article->save();
        return redirect()->route('articles.published')->with('success', 'Le contenu n\'est plus publié.');
    }


    public function searchArticle($keyword)
    {
        $query = Article::query();

        if (!empty($keyword)) {
            $query->where(function ($q) use ($keyword) {
                $q->whereRaw('lower(titre) like ?', ['%' . strtolower($keyword) . '%'])
                    ->orWhereRaw('lower(resume) like ?', ['%' . strtolower($keyword) . '%'])
                    ->orWhereRaw('lower(contenu) like ?', ['%' . strtolower($keyword) . '%'])
                    ->orWhereHas('redacteurUser', function ($q) use ($keyword) {
                        $q->whereRaw('lower(nom) like ?', ['%' . strtolower($keyword) . '%'])
                            ->orWhereRaw('lower(prenom) like ?', ['%' . strtolower($keyword) . '%']);
                    });
            });
        }
        return $query->get();
    }
}
