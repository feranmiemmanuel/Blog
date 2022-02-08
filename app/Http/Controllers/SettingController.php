<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){
      return view('backend.settings.index',[
        'title'=>'Admin Settings',
      ]);
    }
    //Store
    public function save_settings(Request $request){
      $data= new Settings;
      $data->comment_auto= $request->comment_auto;
      $data->user_auto= $request->user_auto;
      $data->recent_limit=$request->recent_limit;
      $data->popular_limit=$request->popular_limit;
      $data->recent_comment_limit= $request->recent_comment_limit;
      $data->save();

      return redirect('admin/settings')->with('success','Data has been Updated');
    }
}
