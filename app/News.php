<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $guarded = array('id');
    
    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
        );
        
        //News Modelに関連付けを行う
        public function histories()
        {
            return $this->hasMany('App\History');
        }
}
