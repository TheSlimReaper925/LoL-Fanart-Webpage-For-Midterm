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
}
