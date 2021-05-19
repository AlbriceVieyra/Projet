<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        
        return view('posts.index', [
            'posts' => $posts    
        ]);
        
        
    }
    
    public function show(string $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        
        // firstOrFail revient à faire ça : 
        // if ($post === null) {
        //     abort(404);
        // }
        
         /*Liste des commentaires sans tri*/
        $answer = $post->answers;
        $categories = $post->categories;
        
        // Liste des commentaires du plus récent au plus ancien
        /*$answers = $post->answers()->latest()->get();*/
        // Récupération de la liste des catégories
        /*$categories = $post->categories;*/
        
        return view('posts.show', [
            'post' => $post,
            'answers' => $answer,
            
        ]);
    }
    
    public function create()
    {
        $categories = Category::all(); 
        
        return view('posts.create', [
            'categories' => $categories
            ]);
    }
}
