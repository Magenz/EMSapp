<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     */
    public function index()
    {   
        $a = Auth::user();
        $user = User::find($a->id);
        // return $user->post;
        // this shit works with ->post instead of ->posts and i dont fcking know why
        return view('home')->with('posts', $user->post); 
    }
}
