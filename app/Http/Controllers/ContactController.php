<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactController extends Controller
{
    public function add()
    {
        return view('admin.contact');
    }


    public function test()
    {
        return view('admin.test.contactTest');
    }


    public function index(Request $request)
    {
        $contacts = Contact::all();
        return view('admin.contact', ['contacts' => $contacts]);
    }

    

    public function create(Request $request)
    {
        $this->validate($request, Contact::$rules);
        
        $contacts = new Contact;
        $form = $request->all();
        
        unset($form['_token']);
        
        $contacts->fill($form);
        $contacts->save();

        return redirect('/contact');
    }


    public function delete(Request $request)
    {
        $delete = Contact::find($request->id);
        $delete->delete();
        return redirect('/contact');
    }
    
    

   
    
    
    

}
