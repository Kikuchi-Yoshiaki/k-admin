<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\View;
use App\User;
use Illuminate\Support\Facades\Storage;

class ViewController extends Controller
{
    //非ログイン対応
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    //画像一覧画面に移動
    public function add()
    {
        return view('admin.view');
    }
    
    
    //画像テスト画面に移動
    // public function test()
    // {
    //     return view('admin.test.viewTest');
    // }
    
    
    //投稿された画像一覧を表示
    public function index(Request $request)
    {
        $views = View::orderBy('id', 'desc')
            ->paginate(5);
        return view('admin.view', ['views' => $views]);
    }
    
    
    //記事を削除する
    public function delete(Request $request)
    {
        $delete = View::find($request->id);
        $delImage = $delete->view_image;
        Storage::delete('public/view/'.$delImage);
        $delete->delete();
        
        
        return redirect('/view');
    }
    
    
    //画像をテスト送信する
    // public function create(Request $request)
    // {
    //     $this->validate($request, View::$rules);
        
    //     $views = new View;
    //     $form = $request->all();
        
    //     $path = $request->file('view_image')->store('public/view');
    //     $views->view_image = basename($path);
        
    //     unset($form['_token']);
    //     unset($form['view_image']);
        
    //     $views->fill($form);
    //     $views->save();
        
    //     return redirect('view');
    // }
    
    
}
