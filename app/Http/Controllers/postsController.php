<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//this Post is the Post model
use App\Models\Post;

class postsController extends Controller
{
    
    public function index()
    {
    // $a = Post::all();
    // $a = Post::orderBy('title', 'desc')->get();
    $a = Post::orderBy('created_at', 'desc')->paginate(10);
    return view('post/index')->with('posts', $a); 
    }

    public function create()
    {
        return view('post/create'); 
    }

    public function store(Request $request)
    {
        $this->validate($request, 
        [
            'title' => 'required',
            'body' => 'required'
        ]
        );
        //create Post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('post')->with('success', 'post created');
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('post/show')->with('posts', $post);
    }

    public function edit($id)
    {
        $a = Post::find($id);
        return view('post/edit')->with('post', $a);

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, 
        [
            'title' => 'required',
            'body' => 'required'
        ]
        );
        //Find post to edit
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('post')->with('success', 'post updated');
    }

    public function destroy($id)
    {
        $a = Post::find($id);
        $a->delete();
        return redirect('/post')->with('success', 'post removed');
    }
}
