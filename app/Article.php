<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = ['id'];
    
    public static $rules = [
        'title' => 'required',
        'body' => 'required',
        'main_image' => 'required',
        'category' => 'required',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
