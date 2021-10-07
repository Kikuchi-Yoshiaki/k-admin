<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    protected $guarded = ['id'];
    
    public static $rules = [
        //'user_id' => 'required',
        'view_image' => 'required',
        ];
}
