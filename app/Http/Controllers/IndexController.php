<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    
    public function index(Request $request)
    {
        $articles = new Article();
        $articles = $articles->all();
       
        $menu = [];
        $item = [];

         if ($request->isMethod('post')) {
            $messages = [

            'require' => "Поле :attribute обязательно для ввода",
            'email' => "Поле :attribute является емэйлом"


        ];
        
            $this->validate(
                $request,
                [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'text' => 'required'
        ],
                $messages
            );

            $data = $request->all();
            $mailer = [
        'from' =>
        [
            'adress'=> $data['email'],
            'name'=>$data['name']
        ]
                      ];

            Mail::send('email', ['data' => $data], function ($message) use ($data) {
                $message->to($data['email'], $data['name']);
                $message->from('sangmorozov@mail.ru')->subject('Your Reminder!');
            });
        } 
        foreach ($articles as $article) {
            $item = ['title'=>$article->name,'aliases'=>$article->aliases];
            array_push($menu, $item);
        }
    
        return view(
            'index',
        [
            'articles' => $articles,
            'menu' => $menu,
          
        ]);
    }
}