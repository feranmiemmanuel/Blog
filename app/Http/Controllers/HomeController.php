<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class HomeController extends Controller
{
  public function home(Request $request){
    if($request->has('search')){
      $search = $request->search;
      $posts = Post::where('title', 'like', '%'.$search.'%')->orderBy('id', 'desc')->paginate(1);
      $categories = Category::all();
    }else{
      $posts = Post::orderBy('id','desc')->paginate(1);
      $categories = Category::all();
    }
    return view('home',['posts'=>$posts, 'categories'=>$categories]);
  }
}
