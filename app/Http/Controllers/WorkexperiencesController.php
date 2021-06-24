<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Workexperience;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class WorkexperiencesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    $a = Auth::user();
    $user = User::find($a->id);
    return view('workexp.index')->with('workexperience', $user->workexperience);
    }
    // points to create view
    public function create()
    {
        return view('workexp/create');
    }
    // storing function
    public function store(Request $request)
    {
                //validation
                $this->validate($request, 
                [
                    'dateFrom' => 'required',
                    'dateTo' => 'required'
                ]
                );
                //add new work experience
                $a = new Workexperience;
                $a->dateFrom = $request->input('dateFrom');
                $a->dateTo = $request->input('dateTo');
                $a->positionTitle = $request->input('positionTitle');
                $a->department = $request->input('department');
                $a->monthlySalary = $request->input('monthlySalary');
                $a->salaryGrade = $request->input('salaryGrade');
                $a->appointmentStatus = $request->input('appointmentStatus');
                $a->govService = $request->input('govService');

                //grabs the id from user table and put it to post user_id column
                $user = Auth::user();
                $a->user_id = $user->id;
                $a->save();

                return redirect('workexp')->with('success', 'Work Experience Added');
    }
 
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
