<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function add()
    {
        return view('admin.login');
    }

    public function master()
    {
        return view('admin.master');
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function article()
    {
        return view('admin.article');
    }



    public function inquiry()
    {
        return view('admin.inquiry');
    }

}