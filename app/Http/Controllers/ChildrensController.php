<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Children;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ChildrensController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    //with pagination, this is how u do it =) im a fcking GOD
    $a = Auth::user();
    $user = User::find($a->id)->Children()->paginate(10);
    return view('children.index')->with('children', $user);
    }
    // points to create view
    public function create()
    {
        return view('children/create');
    }
    // storing function
    public function store(Request $request)
    {
        //validation
        $this->validate($request, 
        [
            'childName' => 'required'
        ]);
        //add new work experience
        $a = new Children;
        $a->childName = $request->input('childName');
        $a->birthDate = $request->input('birthDate');
        //add user_id into ID of user
        $user = Auth::user();
        $a->user_id = $user->id;
        $a->save();
        return redirect('children')->with('success', 'Children Added');
    }
 
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $a = Children::find($id);
        return view('children/edit')->with('children', $a);
    }

    
    public function update(Request $request, $id)
    {
        //validation
        $this->validate($request, 
        [
            'childName' => 'required'
        ]
        );
        //Find work to edit
        $a = Children::find($id);
        $a->childName = $request->input('childName');
        $a->birthDate = $request->input('birthDate');
        $a->save();
        return redirect('children')->with('success', 'Children Information updated');
    }

    public function destroy($id)
    {
        $a = Children::find($id);
        $a->delete();
        return redirect('/children')->with('success', 'Child Deleted');
    }
}
