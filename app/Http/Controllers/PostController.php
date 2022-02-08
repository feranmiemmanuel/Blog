<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Post::all();
        return view('backend.post.index', [
          'data'=>$data,
          'title'=>'All posts',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $cats=Category::all();
        return view('backend.post.add',['cats'=>$cats,'title'=>'Add Post']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'title'=>'required',
        'category'=>'required',
        'detail'=>'required'
      ]);
      //Post Thumbnail
      //dd($request->all());
      //$data=$request->only('title','detail');
      if($request->hasFile('thumb')){
        $image=$request->file('thumb');
        $rethumbimage=time().'.'.$image->getClientOriginalExtension();
        $dest=public_path('/imgs/thumb');
        $image->move($dest,$rethumbimage);
        //$image->move(public_path().'/imgs',$reimage);
      }else{
        $rethumbimage='na';
      }
      //Post Full Image
      //$data=$request->only('title','detail');
      if($request->hasFile('full_img')){
        $image=$request->file('full_img');
        $refullimage=time().'.'.$image->getClientOriginalExtension();
        $dest=public_path('/imgs/full');
        $image->move($dest,$refullimage);
        //$image->move(public_path().'/imgs',$reimage);
      }else{
        $refullimage='na';
      }
      $post=new Post;
        $post->user_id=0;
        $post->cat_id=$request->category;
        $post->title=$request->title;
        $post->thumb=$rethumbimage;
        $post->full_img=$refullimage;
        $post->detail=$request->detail;
        $post->tags=$request->tags;
        $post->save();
        return redirect('admin/posts/create')->with('success','Data has been added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $cats=Category::all();
      $data=Post::find($id);
      return view('backend.post.update',['cats'=>$cats, 'data'=>$data, 'title'=>'Update Category']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $request->validate([
        'title'=>'required',
        'category'=>'required',
        'detail'=>'required'
      ]);
      //Post Thumbnail
      //dd($request->all());
      //$data=$request->only('title','detail');
      if($request->hasFile('thumb')){
        $image=$request->file('thumb');
        $rethumbimage=time().'.'.$image->getClientOriginalExtension();
        $dest=public_path('/imgs/thumb');
        $image->move($dest,$rethumbimage);
        //$image->move(public_path().'/imgs',$reimage);
      }else{
        $rethumbimage=$request->thumb;
      }
      //Post Full Image
      //$data=$request->only('title','detail');
      if($request->hasFile('full_img')){
        $image=$request->file('full_img');
        $refullimage=time().'.'.$image->getClientOriginalExtension();
        $dest=public_path('/imgs/full');
        $image->move($dest,$refullimage);
        //$image->move(public_path().'/imgs',$reimage);
      }else{
        $refullimage=$request->full_img;
      }
      $post=Post::find($id);
        $post->user_id=0;
        $post->cat_id=$request->category;
        $post->title=$request->title;
        $post->thumb=$rethumbimage;
        $post->full_img=$refullimage;
        $post->detail=$request->detail;
        $post->tags=$request->tags;
        $post->save();
        return redirect('admin/posts/'.$id.'/edit')->with('success','Data has been Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Post::where('id',$id)->delete();
      return redirect('admin/posts')->with('success','Data has been deleted');
    }
}
