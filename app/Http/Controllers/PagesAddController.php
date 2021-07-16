<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PagesAddController extends Controller
{
    public function index(Request $request){

        if ($request->isMethod('post')) {
            $resalt = $request->except('_token');
            
            $validator =  Validator::make($resalt,
        [
            'name' => 'required|max:255',
            'aliases' => 'required|unique:articles|max:255',
            'text' => 'required'
        ]);
        if($validator->fails()){
            return redirect()->route('pagesAdd')->withErrors($validator)->withInput();
        }
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $resalt['img'] = $file->getClientOriginalName();
            $file->move(public_path().'/inc/img',$resalt['img']);
        }
        $articles = new Article();
        $articles->fill($resalt);
        if($articles->save()){
           return redirect()->route('main')->with('status','Страница добавлена');
        }
    }
        if (view()->exists('admin.contentAdd')) {
            $data = ['title' => 'Добавление статьи '];

            return view('admin.contentAdd', $data);
        }
        abort(404);
    }
    
}
