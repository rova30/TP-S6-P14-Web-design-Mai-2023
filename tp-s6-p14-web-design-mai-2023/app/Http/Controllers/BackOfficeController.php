<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function rcfindArticleById($url){
        $article = (new ArticleController())->getArticleById($url);
        return view('articleViewByRedacteurChef', compact('article'));
    }

    public function rcfindArticleByIdToUpdatePage($url){
        $article = (new ArticleController())->getArticleById($url);
        return view('updateArticlePageByRedacteurChef', compact('article'));
    }


    public function adminfindArticleById($url){
        $article = (new ArticleController())->getArticleById($url);
        return view('articleViewByAdmin', compact('article'));
    }

}
