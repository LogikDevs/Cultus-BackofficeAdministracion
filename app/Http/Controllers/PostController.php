<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function ListAllPosts(Request $request) {
        $posts = Post::with('user')->paginate(30);
        return view('posts.list', compact('posts'));
    }
    
    public function ListOnePost($id_post) {
        return Post::findOrFail($id_post);
    }

}
