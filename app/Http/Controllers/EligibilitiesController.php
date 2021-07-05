<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Eligibility;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EligibilitiesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
    //with pagination, this is how u do it =) im a fcking GOD
    $a = Auth::user();
    $user = User::find($a->id)->Eligibility()->paginate(10);
    return view('eligibility.index')->with('eligibility', $user);
    }




    // points to create view
    public function create()
    {
        return view('eligibility/create');
    }
    // storing function
    public function store(Request $request)
    {
                //validation
                $this->validate($request, 
                [
                    'eligibility_name' => 'required'
                ]
                );
                //add new work experience
                $a = new Eligibility;
                $a->eligibility_name = $request->input('eligibility_name');
                $a->rating = $request->input('rating');
                $a->exam_date = $request->input('exam_date');
                $a->exam_place = $request->input('exam_place');
                $a->license_number = $request->input('license_number');
                $a->license_date_validity = $request->input('license_date_validity');
                
                //grabs the id from user table and put it to post user_id column
                $user = Auth::user();
                $a->user_id = $user->id;
                $a->save();

                return redirect('eligibility')->with('success', 'Eligibility Added');
    }
 
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $a = Eligibility::find($id);
        return view('eligibility/edit')->with('eligibility', $a);
    }

    
    public function update(Request $request, $id)
    {
        //validation
        $this->validate($request, 
        [
            'eligibility_name' => 'required'
        ]
        );
        //Find work to edit
        $a = Eligibility::find($id);
        $a->eligibility_name = $request->input('eligibility_name');
        $a->rating = $request->input('rating');
        $a->exam_date = $request->input('exam_date');
        $a->exam_place = $request->input('exam_place');
        $a->license_number = $request->input('license_number');
        $a->license_date_validity = $request->input('license_date_validity');
        $a->save();

        return redirect('eligibility')->with('success', 'Work Experience updated');
    }

    public function destroy($id)
    {
        $a = Eligibility::find($id);
        $a->delete();
        return redirect('/eligibility')->with('success', 'Eligibility removed');
    }
}
