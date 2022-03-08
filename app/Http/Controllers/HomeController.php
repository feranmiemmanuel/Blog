<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class HomeController extends Controller
{
  public function home(){
    $posts = Post::all();
    $categories = Category::all();
    return view('home',['posts'=>$posts, 'categories'=>$categories]);
  }
}
