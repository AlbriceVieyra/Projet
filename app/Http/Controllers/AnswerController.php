<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Post;


class AnswerController extends Controller
{
    public function store(int $id, Request $request)
    {
        $request->validate([
            'pseudo' => 'required|min:3',
            'content' => 'required|min:3',
        ]);
        
        // On récupère le post ou, s'il n'existe pas, on renvoie une page 404
        $post = Post::findOrFail($id);
        
        $answer = new Answer();
        $answer->pseudo = $request->input('pseudo');
        $answer->content = $request->input('content');
        $answer->post_id = $id;
        $answer->save();
        
        return redirect()->route('posts.show', ['slug' => $post->slug]);
    }
}
