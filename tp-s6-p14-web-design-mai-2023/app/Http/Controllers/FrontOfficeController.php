<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

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
        $article = (new ArticleController())->getArticleById($url);
        return view('articleViewFrontOffice', compact('article'));
    }

    public function searchArticle(){
        $keyword = request('keyword');
        $articles = (new ArticleController())->searchArticle($keyword);
        return view('index', compact('articles', 'keyword'));
    }

}
