<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    
    //記事一覧画面に移動
    public function add()
    {
        return view('admin.article');
    }
    
    //記事テスト画面に移動
    public function test()
    {
        return view('admin.test.articleTest');
    }
    
    
    //投稿された記事一覧を表示
    public function index(Request $request)
    {
        $articles = Article::all();
        return view('admin.article', ['articles' => $articles]);
    }
    
    
    //記事を削除する
    public function delete(Request $request)
    {
        $delete = Article::find($request->id);
        $delImage = $delete->main_image;
        Storage::delete('public/article/'.$delImage);
        $delSub1 = $delete->sub_image_1;
        Storage::delete('public/article/'.$delSub1);
        $delSub2 = $delete->sub_image_2;
        Storage::delete('public/article/'.$delSub2);
        $delSub3 = $delete->sub_image_3;
        Storage::delete('public/article/'.$delSub3);
        $delSub4 = $delete->sub_image_4;
        Storage::delete('public/article/'.$delSub4);
        $delete->delete();
        
        return redirect('/article');
    }
    
    
    //記事をテスト送信する
    public function create(Request $request)
    {
        $this->validate($request, Article::$rules);
        
        $articles = new Article;
        $form = $request->all();
        
        
        if (isset($form['sub_image_1'])) {
            $path1 = $request->file('sub_image_1')->store('public/article');
            $articles->sub_image_1 = basename($path1);
        } else {
            $articles->sub_image_1 = null;
        }
        if (isset($form['sub_image_2'])) {
            $path2 = $request->file('sub_image_2')->store('public/article');
            $articles->sub_image_2 = basename($path2);
        } else {
            $articles->sub_image_2 = null;
        }
        if (isset($form['sub_image_3'])) {  
            $path3 = $request->file('sub_image_3')->store('public/article');
            $articles->sub_image_3 = basename($path3);
        } else {
            $articles->sub_image_3 = null;
        }
        if (isset($form['sub_image_4'])) {
            $path4 = $request->file('sub_image_4')->store('public/article');
            $articles->sub_image_4 = basename($path4);
        } else {
            $articles->sub_image_4 = null;
        }
        
        $path = $request->file('main_image')->store('public/article');
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
    
    
}
