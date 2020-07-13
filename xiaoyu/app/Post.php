<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    //protected $table = 'posts';

    //protected  $primaryKey = 'post_id';


    protected $fillable = [
        'title',
        'content',
        'path'

    ];


    public function user(){


        return $this->belongsTo('App\User');


    }



    public function photo(){


        return $this->belongsTo('App\Photo');


    }


    public function category(){


        return $this->belongsTo('App\Category');


    }



    public function comments(){


        return $this->hasMany('App\Comment');


    }






}
