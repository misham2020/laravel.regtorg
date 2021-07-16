<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Validator;

class PagesEditController extends Controller
{
    public function index(Article $article,Request $request) {
		
		
		/*$page = Page::find($id);*/
		
		if($request->isMethod('delete')) {
			$article->delete();
			return redirect('admin')->with('status','Страница удалена');
		}
		
		
		if($request->isMethod('post')) {
			
			
			$input = $request->except('_token');
			
			$validator = Validator::make($input,[
			
				'name'=>'required|max:255',
				'aliases' => 'required|max:255|unique:articles,aliases,'.$input['id'],
				'text' => 'required'
			
			]);
			
			if($validator->fails()) {
				return redirect()
						->route('pagesEdit',['article'=>$input['id']])
						->withErrors($validator);
			}
			
			if($request->hasFile('img')) {
				$file = $request->file('img');
				$file->move(public_path().'/inc/img',$file->getClientOriginalName());
				$input['img'] = $file->getClientOriginalName();
			}
			else {
				$input['img'] = $input['old_img'];
			}
			
			unset($input['old_img']);
			
			$article->fill($input);
			
			if($article->update()) {
				return redirect('admin')->with('status','Страница обновлена');
			}
			
		}

		
		$old = $article->toArray();
		if(view()->exists('admin.pagesEdit')) {
			
			$data = [
					'title' => 'Редактирование страницы - '.$old['name'],
					'data' => $old
					];
			return view('admin.pagesEdit',$data);		
			
		}
		
	}
}