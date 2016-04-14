<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

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
    
    public function create()
    {
        return view('admin.posts.create');        
    }
    
    public function store(Request $request)
    {
        //dd mata a aplicação e depois mostra os resultados
        //dd($request->all());        
        $this->post->create($request->all());
        
        return redirect()->route('admin.posts.index');
    }
}
