<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Post;
use App\Tag;

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
    
    public function store(PostRequest $request)
    {
        //dd mata a aplicação e depois mostra os resultados        
        //dd($tagsIds);
        //dd($request->all());
                
        $post = $this->post->create($request->all());
        
        //vide evernote
        $post->tags()->sync($this->getTagsIds($request->tags));
        
        return redirect()->route('admin.posts.index');
    }
    
    public function edit($id)
    {
        $post = $this->post->find($id);
        
        return view('admin.posts.edit', compact('post')); 
    }
    
    public function update($id, PostRequest $request)
    {
        $this->post->find($id)->update($request->all());
        
        $post = $this->post->find($id);
        
        //vide evernote
        $post->tags()->sync($this->getTagsIds($request->tags));
        
        return redirect()->route('admin.posts.index');        
    }
    
    public function destroy($id)
    {
        $this->post->find($id)->delete();
        
        return redirect()->route('admin.posts.index');        
    }
    
    private function getTagsIds($tags)
    {       
        //array_map executa uma função em todos os elementos do array nesse caso a função Trim
        //array_filter remove as posições que estão vazias por ex: Ola, , Mundo o campo vazio vai ser removido
        $tagsList = array_filter(array_map('trim',explode(',', $tags)));
        $tagsIds = [];
        
        foreach ($tagsList as $tagName)
        {
            $tagsIds[] = Tag::firstOrCreate(['name'=>$tagName])->id;
        } 
        
        return $tagsIds;
    }
}
