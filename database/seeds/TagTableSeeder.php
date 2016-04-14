<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Mysql deu problema
        //Tag::truncate();
        
        //Mesma coisa digitar factory('App\Tag'), o php 5 já pode usar o Tag::class
        factory(Tag::class, 10)->create();
    }
}
