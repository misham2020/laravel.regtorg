<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index($aliases){
         
        $article = new Article;
        $article = $article->where('aliases', $aliases)->first();
        $data = ['title' => $article->name,'article' => $article];

        return view('article', $data);
    }
}
