<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function homepage()
    {
        $post = Post::all();
        return view('home.homepage',compact('post')); // Make sure you have a home.blade.php file in resources/views
    }
}
