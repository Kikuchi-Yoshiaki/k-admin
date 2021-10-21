<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;

class AdminController extends Controller
{
    public function add()
    {
        return view('admin.login');
    }

    public function index(Request $request)
    {
        $admins = Admin::all();
        
        return view('admin.master', ['admins' => $admins]);
    }

    public function create(Request $request)
    {
       
        $admins = new Admin;
        $form = $request->all();
        
        unset($form['_token']);
        
        $admins->fill($form)->save();
        
        return redirect('/');
    }
    
    public function admin() {
        return view('admin.test.adminPost');
    }
    
    public function delete(Request $request)
    {
        $delete = Admin::find($request->id);
        $delete->delete();
        
        return redirect('/master');
    }
    
    
}