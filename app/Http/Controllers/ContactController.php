<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactController extends Controller
{

    //非ログイン対応
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    //問い合わせ一覧画面に移動
    public function add()
    {
        return view('admin.contact');
    }

    //問い合わせ一覧画面に移動
    // public function test()
    // {
    //     return view('admin.test.contactTest');
    // }

    //問い合わせ詳細画面に移動
    public function inquiry()
    {
        return view('admin.inquiry');
    }


    //問い合わせ一覧を表示
    public function index(Request $request)
    {
        $contacts = Contact::orderBy('id', 'desc')
            ->paginate(5);
        return view('admin.contact', ['contacts' => $contacts]);
    }

    
    //問い合わせの詳細を表示する
    public function show(Request $request)
    {
        $inquiry = Contact::find($request->id);
        if(!isset($inquiry))
        {
            return redirect('/login');
        }
        
        $show = Contact::find($request->id);
        
        return view('admin.inquiry', ['show' => $show]);
    }
    
    
    //記事を削除する
    public function delete(Request $request)
    {
        $delete = Contact::find($request->id);
        $delete->delete();
        
        return redirect('/contact');
    }
    
    
    //問い合わせをテスト送信する
    // public function create(Request $request)
    // {
    //     $this->validate($request, Contact::$rules);
        
    //     $contacts = new Contact;
    //     $form = $request->all();
        
    //     unset($form['_token']);
        
    //     $contacts->fill($form);
    //     $contacts->save();

    //     return redirect('/contact');
    // }

    

}
