<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//somente pelo fato de trabalhar com o extends model já funciona com o model do laravel
class Post extends Model
{
    protected $fillable = [
        'title',
        'content'        
    ];
    
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    
    public function tags()
    {
        //belongsToMany mostra que vai ter varias tags para o post
        //tem que explicitamente mostrar qual tabela faz a relação Many To Many
        return $this->belongsToMany('App\Tag', 'posts_tags');
    }
}
