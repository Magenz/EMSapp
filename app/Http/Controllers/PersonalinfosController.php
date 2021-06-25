<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Personalinfo;


class PersonalinfosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $a = Auth::user();
        $user = User::find($a->id);
        return view('geninfo.index')->with('personal_information', $user->personal_information);
    }
    // points to create view
    public function create()
    {
        return view('geninfo/create');
    }

// storing function
public function store(Request $request)
{
//validation
$this->validate($request, 
[
    'surname' => 'required',
    'first_name' => 'required'
]
);
//add new work experience
$a = new Personalinfo;
$a->surname = $request->input('surname');
$a->first_name = $request->input('first_name');
$a->middle_name = $request->input('middle_name');
$a->name_extention = $request->input('name_extention');
$a->citizenship = $request->input('citizenship');
$a->civil_status = $request->input('civil_status');
$a->gender = $request->input('gender');
$a->birth_date = $request->input('birth_date');
$a->birth_place = $request->input('birth_place');
$a->height = $request->input('height');
$a->weight = $request->input('weight');
$a->blood_type = $request->input('blood_type');
$a->gsis = $request->input('gsis');
$a->pagibig = $request->input('pagibig');
$a->philhealth = $request->input('philhealth');
$a->sss = $request->input('sss');
$a->tin = $request->input('tin');
$a->tel_number = $request->input('tel_number');
$a->cp_number = $request->input('cp_number');


//grabs the id from user table and put it to post user_id column
$user = Auth::user();
$a->user_id = $user->id;
$a->save();

return redirect('geninfo')->with('success', 'Personal Info added');
}
 
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $a = Personalinfo::find($id);
        return view('geninfo/edit')->with('geninfo', $a);
    }

    
    public function update(Request $request, $id)
    {
        //validation
        $this->validate($request, 
        [
            'surname' => 'required',
            'first_name' => 'required'
        ]
        );
        //Find personal info to edit
        $a = Personalinfo::find($id);
        $a->surname = $request->input('surname');
        $a->first_name = $request->input('first_name');
        $a->middle_name = $request->input('middle_name');
        $a->name_extention = $request->input('name_extention');
        $a->citizenship = $request->input('citizenship');
        $a->civil_status = $request->input('civil_status');
        $a->gender = $request->input('gender');
        $a->birth_date = $request->input('birth_date');
        $a->birth_place = $request->input('birth_place');
        $a->height = $request->input('height');
        $a->weight = $request->input('weight');
        $a->blood_type = $request->input('blood_type');
        $a->gsis = $request->input('gsis');
        $a->pagibig = $request->input('pagibig');
        $a->philhealth = $request->input('philhealth');
        $a->sss = $request->input('sss');
        $a->tin = $request->input('tin');
        $a->tel_number = $request->input('tel_number');
        $a->cp_number = $request->input('cp_number');
        $a->save();

        return redirect('geninfo')->with('success', 'Work Experience updated');
    }

    public function destroy($id)
    {
        $a = Personalinfo::find($id);
        $a->delete();
        return redirect('/geninfo')->with('success', 'Personal Information Updated');
    }
}
