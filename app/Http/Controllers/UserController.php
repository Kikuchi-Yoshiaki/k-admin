<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
//これを追記！
use App\Article;
use App\View;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //非ログイン対応
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    //ユーザー一覧画面に移動
    public function add()
    {
        return view('admin.profile');
    }
    
    //新規登録テスト画面に移動
    // public function test()
    // {
    //     return view('admin.test.profileTest');
    // }
    
    
    //ユーザー情報一覧を表示
    public function index(Request $request)
    {
        $users = User::orderBy('id', 'desc')
            ->paginate(10);
        return view('admin.profile', ['users' => $users]);
    }
    
    
    //ユーザー情報を削除する
    public function delete(Request $request)
    {
        $delete = User::find($request->id);
        $delImage = $delete->profile_image;
        Storage::delete('public/user/'.$delImage);
        $delete->delete();
        
        return redirect('/profile');
    }
    
    
    //新規ユーザー登録をテスト送信する
    // public function create(Request $request)
    // {
    //     $this->validate($request, User::$rules);
        
    //     $users = new User;
    //     $form = $request->all();
        
    //     if (isset($form['profile_image'])) {
    //         $path = $request->file('profile_image')->store('public/user');
    //         $users->profile_image = basename($path);
    //     } else {
    //         $users->profile_image = null;
    //     }
        
    //     unset($form['_token']);
    //     unset($form['profile_image']);
        
    //     $users->fill($form);
    //     $users->save();
        
    //     return redirect('/profile');
    // }
    
}
