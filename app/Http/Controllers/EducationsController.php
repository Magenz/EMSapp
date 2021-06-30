<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EducationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    //with pagination, this is how u do it =) im a fcking GOD
    $a = Auth::user();
    $user = User::find($a->id)->Education()->paginate(10);
    return view('education.index')->with('education', $user);
    }
    // points to create view
    public function create()
    {
        return view('education/create');
    }
    // storing function
    public function store(Request $request)
    {
                //validation
                $this->validate($request, 
                [
                    'level' => 'required',
                    'school' => 'required'
                ]
                );
                //add new work experience
                $a = new Education;
                $a->level = $request->input('level');
                $a->school = $request->input('school');
                $a->degree_course = $request->input('degree_course');
                $a->attendance_from = $request->input('attendance_from');
                $a->attendance_to = $request->input('attendance_to');
                $a->units_earned = $request->input('units_earned');
                $a->graduate_year = $request->input('graduate_year');
                $a->awards_scholarship = $request->input('awards_scholarship');
                
                //grabs the id from user table and put it to post user_id column
                $user = Auth::user();
                $a->user_id = $user->id;
                $a->save();
                return redirect('education')->with('success', 'Education Added');
    }
 
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $a = Education::find($id);
        return view('education/edit')->with('education', $a);
    }

    
    public function update(Request $request, $id)
    {
        //validation
        $this->validate($request, 
        [
            'level' => 'required',
            'school' => 'required'
        ]
        );
        //Find work to edit
        $a = Education::find($id);
        $a->level = $request->input('level');
        $a->school = $request->input('school');
        $a->degree_course = $request->input('degree_course');
        $a->attendance_from = $request->input('attendance_from');
        $a->attendance_to = $request->input('attendance_to');
        $a->units_earned = $request->input('units_earned');
        $a->graduate_year = $request->input('graduate_year');
        $a->awards_scholarship = $request->input('awards_scholarship');
        $a->save();

        return redirect('education')->with('success', 'Education updated');
    }

    public function destroy($id)
    {
        $a = Education::find($id);
        $a->delete();
        return redirect('/education')->with('success', 'Education removed');
    }
}
