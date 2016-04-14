<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Apaga todos os registros da tabela
        //Mysql deu problema
        //Post::truncate();
        
        factory('App\Post', 15)->create();
    }
}
