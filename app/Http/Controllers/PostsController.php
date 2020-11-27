<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use File;
use Auth;
use App\Posts;
class PostsController extends Controller
{
    public function storePosts(Request $request)
    {
    	if(Input::file("image")){
    		$dp=public_path('images');
    		$filename=uniqid().".jpg";
    		$img=Input::file("image")->move($dp, $filename);
    	}

    	return Posts::create([
    		'User_id'=>Auth::user()->id,
    		'description'=>$request->input("description"),
    		'champion'=>$request->input("champion"),
    		'img_url'=>$filename
    	]);
    }
}
