<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Composer;

class PageController extends Controller
{
    public function index(){
        $posts = Post::orderby('id', 'desc')->limit(10)->get();

        return view('guest.home', compact('posts'));
    }

    public function posts(){
        return view('guest.posts');
    }

    public function contacts(){
        return view('guest.contancts');
    }
    public function detail($post){
        // $post = Post::where('id', $id)->first();
        // $post = $postcom;
        return view('guest.post-detail', compact('post'));
    }
}
