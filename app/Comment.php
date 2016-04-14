<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=[
        'post_id',
        'comment',
        'name',
        'email'
    ];
    
    public function post()
    {
        //Retorna qual o post referente ao comment (belongsTo)
        return $this->belongsTo('App\Post');
    }
}
