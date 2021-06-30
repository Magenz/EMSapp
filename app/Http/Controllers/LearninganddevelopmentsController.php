<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Learninganddevelopment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LearninganddevelopmentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    //with pagination, this is how u do it =) im a fcking GOD
    $a = Auth::user();
    $user = User::find($a->id)->Learninganddevelopment()->paginate(10);
    return view('learninganddevelopment.index')->with('learninganddevelopment', $user);
    }
    // points to create view
    public function create()
    {
        return view('learninganddevelopment/create');
    }
    // storing function
    public function store(Request $request)
    {
                //validation
                $this->validate($request, 
                [
                    'title' => 'required'
                ]
                );
                //add new work experience
                $a = new Learninganddevelopment;
                $a->title = $request->input('title');
                $a->dateFrom = $request->input('dateFrom');
                $a->dateTo = $request->input('dateTo');
                $a->hours = $request->input('hours');
                //grabs the id from user table and put it to post user_id column
                $user = Auth::user();
                $a->user_id = $user->id;
                $a->save();

                return redirect('learninganddevelopment')->with('success', 'Learning and Development Added');
    }
 
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $a = Learninganddevelopment::find($id);
        return view('learninganddevelopment/edit')->with('learninganddevelopment', $a);
    }

    
    public function update(Request $request, $id)
    {
        //validation
        $this->validate($request, 
        [
            'title' => 'required'
        ]
        );
        //Find work to edit
        $a = Learninganddevelopment::find($id);
        $a->title = $request->input('title');
        $a->dateFrom = $request->input('dateFrom');
        $a->dateTo = $request->input('dateTo');
        $a->hours = $request->input('hours');
        $a->save();

        return redirect('learninganddevelopment')->with('success', 'Learning and Development updated');
    }

    public function destroy($id)
    {
        $a = Learninganddevelopment::find($id);
        $a->delete();
        return redirect('/learninganddevelopment')->with('success', 'Learning and Development removed');
    }
}
