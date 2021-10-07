<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $guarded = ['id'];
    
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        ];
        
}
