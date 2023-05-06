<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class FrontOfficeController extends Controller
{
    public function index(){
        $articles = Article::where('dateheurepublication', '!=', null)
                            ->where('publiepar', '!=', null)
                            ->orderBy('dateheurepublication', 'desc')
                            ->get();
        return view('index', compact('articles'));
    }

    public function getArticle($url){
        $parts = explode("-", $url);
        $id = $parts[count($parts) - 1];
        $fiche = Cache::remember('fiche_' . $id, 60, function () use ($id){
            return Article::find($id);
        });
        $response = response()->view('articleViewFrontOffice', [
            'article' => $fiche,
        ]);
        $response->header('Cache-control', 'max-age=3600, public');
        return $response;
    }

    public function searchArticle(){
        $keyword = request('keyword');
        $articles = (new ArticleController())->searchArticle($keyword);
        return view('index', compact('articles', 'keyword'));
    }

}
