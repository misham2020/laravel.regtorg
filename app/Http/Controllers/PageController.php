<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Validation\Validates;
use App\Article;

class PageController extends Controller
{
    public function index(){
        $articles = new Article;
        $articles = $articles->all();
        $data = ['title' => 'список статей','articles' => $articles];

        return view('admin.content_a', $data);
    }
}


