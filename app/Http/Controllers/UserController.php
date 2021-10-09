<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function add()
    {
        return view('admin.profile');
    }
    
    
    public function test()
    {
        return view('admin.test.profileTest');
    }
    
    
    public function index(Request $request)
    {
        $users = User::all();
        return view('admin.profile', ['users' => $users]);
    }
    
    
    public function create(Request $request)
    {
        $this->validate($request, User::$rules);
        
        $users = new User;
        $form = $request->all();
        
        if (isset($form['profile_image'])) {
            $path = $request->file('profile_image')->store('public/image');
            $users->profile_image = basename($path);
        } else {
            $users->profile_image = null;
        }
        
        unset($form['_token']);
        unset($form['profile_image']);
        
        $users->fill($form);
        $users->save();
        
        return redirect('/profile');
    }
    
    
    public function delete(Request $request)
    {
        $delete = User::find($request->id);
        $delete->delete();
        
        return redirect('/profile');
    }
}
