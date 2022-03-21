<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class HomeController extends Controller
{
  public function index(Request $request){
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
  //Post detail
  public function detail(Request $request,$slug,$postId){
    $detail = Post::find($postId);
    $categories = Category::all();
    return view('detail',['detail'=>$detail, 'categories'=>$categories]);
  }
}
