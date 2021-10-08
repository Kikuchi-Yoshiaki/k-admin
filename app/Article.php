<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = ['id'];
    
    public static $rules = [
        //'user_id' => 'required',
        'title' => 'required',
        'body' => 'required',
        'main_image' => 'required',
        'category' => 'required',
        ];
}
