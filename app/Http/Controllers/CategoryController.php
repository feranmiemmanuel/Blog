<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Category::all();
        return view('backend.category.index',[
          'data'=>$data,
          'title'=>'All Categories',
          'meta_desc'=>'This is meta description for all categories'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.add',['title'=>'Add Category']);
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
          'title'=>'required'
        ]);
        //dd($request->all());
        $data=$request->only('title','detail');
        if($request->hasFile('image')){
          $image=$request->file('image');
          $reimage=time().'.'.$image->getClientOriginalExtension();
          $dest=public_path('/imgs');
          $image->move($dest,$reimage);
          //$image->move(public_path().'/imgs',$reimage);
        }else{
          $reimage='na';
        }
        $category=new Category;
          $category->title=$request->title;
          $category->detail=$request->detail;
          $category->image=$reimage;
          $category->save();
          return redirect('admin/category/create',['title'=>'Add Category'])->with('success','Data has been added');

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
        $data=Category::find($id);
        return view('backend.category.update',['data'=>$data, 'title'=>'Update Category']);
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
        'title'=>'required'
      ]);
      //dd($request->all());
      $data=$request->only('title','detail');
      if($request->hasFile('image')){
        $image=$request->file('image');
        $reimage=time().'.'.$image->getClientOriginalExtension();
        $dest=public_path('/imgs');
        $image->move($dest,$reimage);
        //$image->move(public_path().'/imgs',$reimage);
      }else{
        $reimage=$request->image;
      }
      $category=Category::find($id);
        $category->title=$request->title;
        $category->detail=$request->detail;
        $category->image=$reimage;
        $category->save();
        return redirect('admin/category/'.$id.'/edit')->with('success','Data has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::where('id',$id)->delete();
        return redirect('admin/category')->with('success','Data has been deleted');
    }
}
