<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name'
    ];
    
    public function posts()
    {
        //belongsToMany mostra que vai ter varias tags para o post
        //tem que explicitamente mostrar qual tabela faz a relação Many To Many
        return $this->belongsToMany('App\Post', 'posts_tags');
    }
}
