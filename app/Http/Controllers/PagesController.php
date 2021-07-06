<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;


class PagesController extends Controller
{
//define pages here
    public function index(){
        $a = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('pages/index')->with('posts', $a); 
        // return view('pages/index');
    }
    public function about(){
        return view('pages/about');
    }
    public function admin(){
        return view('pages/admin');
    }
  
}
