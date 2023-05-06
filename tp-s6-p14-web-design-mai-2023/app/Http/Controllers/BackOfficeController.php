<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class BackOfficeController extends Controller
{
    public function homeRedacteur(){
        return view('homeRedacteur');
    }

    public function homeRedacteurEnChef(){
        $articles = (new ArticleController())->findAllArticleNotYetValidate();
        return view('homeRedacteurEnChef', compact('articles'));
    }

    public function homeAdministrateur(){
        $articles = (new ArticleController())->findAllArticleNotYetPublished();
        return view('homeAdministrateur', compact('articles'));
    }

    public function rcfindArticleById($id){
        $article = Article::find($id);
        return view('articleViewByRedacteurChef', compact('article'));
    }

    public function rcfindArticleByIdToUpdatePage($id){
        $article = Article::find($id);
        return view('updateArticlePageByRedacteurChef', compact('article'));
    }


    public function adminfindArticleById($id){
        $article = Article::find($id);
        return view('articleViewByAdmin', compact('article'));
    }

    public function adminfindAllArticlePublished(){
        $articleResults = (new ArticleController())->findAllArticlePublished();
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 6;
        $articlesCollection = collect($articleResults)->sortByDesc('dateheurepublication');
        $currentPageArticles = $articlesCollection->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $articles = new LengthAwarePaginator($currentPageArticles, count($articlesCollection), $perPage);
        $articles->setPath('/administrateur/articles/published');
        return view('articlePublishedByAdmin', compact('articles'));
    }

    public function adminfindArticlePublishedById($id){
        $article = Article::find($id);
        return view('articlePublishedViewByAdmin', compact('article'));
    }

    public function adminSearchArticle(){
        $keyword = request('keyword');
        $articleResults = (new ArticleController())->searchArticle($keyword);
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 6;
        $articlesCollection = collect($articleResults)->sortByDesc('dateheurepublication');
        $currentPageArticles = $articlesCollection->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $articles = new LengthAwarePaginator($currentPageArticles, count($articlesCollection), $perPage);
        $articles->setPath('/administrateur/search?keyword='.$keyword);
        return view('articlePublishedByAdmin', compact('articles', 'keyword'));
    }


}
