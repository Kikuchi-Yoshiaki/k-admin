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


}