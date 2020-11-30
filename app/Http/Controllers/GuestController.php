<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
class GuestController extends Controller
{
    public function firstpage()
    {
        $posts = Posts::with(['OwnerUser','like'])->get();
        return view('welcome', ["posts"=>$posts]);
    }

    public function search(Request $request){
    	$result = Posts::with(['OwnerUser', 'like'])->where('champion', $request->input('champion'))->get();

    	return view('search', ["results"=>$result]);
    }
}
