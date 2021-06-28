<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//this Post is the Post model
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class postsController extends Controller
{

    /**
     * Create a new controller instance
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    //index
    public function index()
    {
    // $a = Post::all();
    // $a = Post::orderBy('title', 'desc')->get();
    $a = Post::orderBy('created_at', 'desc')->paginate(10);
    return view('post/index')->with('posts', $a); 
    }
    //create
    public function create()
    {
        return view('post/create'); 
    }
    //save
    public function store(Request $request)
    {
                        $this->validate($request, 
                        [
                            'title' => 'required',
                            'body' => 'required',
                            'cover_image' => 'image|nullable|max:1999'
                        ]
                        );
                        //handle file upload
                        if($request->hasFile('cover_image')){
                            //Get Filename with the extention
                            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
                            //get filename
                            $filename = pathinfo($filenameWithExt,  PATHINFO_FILENAME);
                            //get extention
                            $extension = $request->file('cover_image')->getClientOriginalExtension();
                            //file to store
                            $fileNameToStore = $filename.'_'.time().'.'.$extension;
                            //upload
                            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);

                        } else {
                            $fileNameToStore ='noimage.jpg';
                        }

                        //create Post
                        $post = new Post;
                        $post->title = $request->input('title');
                        $post->body = $request->input('body');
                        //grabs the id from user table and put it to post user_id column
                        $user = Auth::user();
                        $post->user_id = $user->id;
                        $post->cover_image = $fileNameToStore;
                        $post->save();

                        return redirect('post')->with('success', 'post created');
    }
//show
    public function show($id)
    {
        $post = Post::find($id);
        return view('post/show')->with('posts', $post);
    }

    public function edit($id)
    {
       

        $user = Auth::user();
        //this one ensures that it only querries your own data
        $a = DB::table('posts')->where('user_id', $user->id)->find($id);
        //  $a = Post::find($id);
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
        //handle file upload
        if($request->hasFile('cover_image')){
        //Get Filename with the extention
        $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
        //get filename
        $filename = pathinfo($filenameWithExt,  PATHINFO_FILENAME);
        //get extention
        $extension = $request->file('cover_image')->getClientOriginalExtension();
        //file to store
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        //upload
        $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } 


        //Find post to edit
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        if($request->hasFile('cover_image')){
         $post->cover_image = $fileNameToStore;   
        }
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
