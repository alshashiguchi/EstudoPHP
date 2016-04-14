<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsAdminController extends Controller
{
    private $post;
    
    //dependency injection com contrutor
    public function __construct(Post $post)
    {
        $this->post = $post;        
    }
    
    public function index()
    {        
        $posts = $this->post->paginate(5);
        
        return view('admin.posts.index', compact('posts'));
    }
}
