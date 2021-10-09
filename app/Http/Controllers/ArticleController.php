<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;

class ArticleController extends Controller
{
    public function add()
    {
        return view('admin.article');
    }
    
    
    public function test()
    {
        return view('admin.test.articleTest');
    }
    
    
    public function index(Request $request)
    {
        $articles = Article::all();
        return view('admin.article', ['articles' => $articles]);
    }
    
    
    public function create(Request $request)
    {
        $this->validate($request, Article::$rules);
        
        $articles = new Article;
        $form = $request->all();
        
        if (isset($form['sub_image_1'])) {
            $path1 = $request->file('sub_image_1')->store('public/image');
            $articles->sub_image_1 = basename($path1);
        } else {
            $articles->sub_image_1 = null;
        }
        if (isset($form['sub_image_2'])) {
            $path2 = $request->file('sub_image_2')->store('public/image');
            $articles->sub_image_2 = basename($path2);
        } else {
            $articles->sub_image_2 = null;
        }
        if (isset($form['sub_image_3'])) {  
            $path3 = $request->file('sub_image_3')->store('public/image');
            $articles->sub_image_3 = basename($path3);
        } else {
            $articles->sub_image_3 = null;
        }
        if (isset($form['sub_image_4'])) {
            $path4 = $request->file('sub_image_4')->store('public/image');
            $articles->sub_image_4 = basename($path4);
        } else {
            $articles->sub_image_4 = null;
        }
        
        $path = $request->file('main_image')->store('public/image');
        $articles->main_image = basename($path);
        
        unset($form['_token']);
        unset($form['main_image']);
        unset($form['sub_image_1']);
        unset($form['sub_image_2']);
        unset($form['sub_image_3']);
        unset($form['sub_image_4']);
        
        $articles->fill($form);
        $articles->save();
        
        return redirect('article');
    }
    
    
    public function delete(Request $request)
    {
        $delete = Article::find($request->id);
        $delete->delete();
        
        return redirect('/article');
    }
    
    
}
