<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\View;

class ViewController extends Controller
{
    public function add()
    {
        return view('admin.view');
    }
    
    
    public function test()
    {
        return view('admin.test.viewTest');
    }
    
    
    public function index(Request $request)
    {
        $views = View::all();
        return view('admin.view', ['views' => $views]);
    }
    
    
    public function create(Request $request)
    {
        $this->validate($request, View::$rules);
        
        $views = new View;
        $form = $request->all();
        
        $path = $request->file('view_image')->store('public/view');
        $views->view_image = basename($path);
        
        unset($form['_token']);
        unset($form['view_image']);
        
        $views->fill($form);
        $views->save();
        
        return redirect('view');
    }
    
    
    public function delete(Request $request)
    {
        $delete = View::find($request->id);
        $delete->delete();
        
        return redirect('/view');
    }
    
    
    
}
