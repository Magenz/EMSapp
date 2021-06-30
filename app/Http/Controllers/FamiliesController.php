<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Family;
use Illuminate\Support\Facades\DB;

class FamiliesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $a = Auth::user();
        $user = User::find($a->id);
        
        return view('family.index')->with('family', $user->Family);
    }

    // points to create view
    public function create()
    {
        return view('family/create');
    }

// storing function
public function store(Request $request)
{
//validation
$this->validate($request, 
[  
]
);
//add new work experience
$a = new Family;
//spouse
$a->spouse_surname = $request->input('spouse_surname');
$a->spouse_firstname = $request->input('spouse_firstname');
$a->spouse_middlename = $request->input('spouse_middlename');
$a->spouse_name_ext = $request->input('spouse_name_ext');
$a->spouse_occupation = $request->input('spouse_occupation');
$a->spouse_employer_business = $request->input('spouse_employer_business');
$a->spouse_business_address = $request->input('spouse_business_address');
$a->spouse_tel_number = $request->input('spouse_tel_number');
//father
$a->father_surname = $request->input('father_surname');
$a->father_firstname = $request->input('father_firstname');
$a->father_middlename = $request->input('father_middlename');
$a->father_name_ext = $request->input('father_name_ext');
//mother
$a->mother_maiden_name = $request->input('mother_maiden_name');
$a->mother_surname = $request->input('mother_surname');
$a->mother_firstname = $request->input('mother_firstname');
$a->mother_middlename = $request->input('mother_middlename');
//grabs the id from user table and put it to post user_id column
$user = Auth::user();
$a->user_id = $user->id;
$a->save();

return redirect('family')->with('success', 'Family Info added');
}
 
    public function show($id)
    {
        //
    }

    public function edit($id)
    {  
        // $a = Family::find($user_id);
        $user = Auth::user();
        //this one ensures that it only querries your own data
        $a = DB::table('family')->where('user_id', $user->id)->find($id);
        
    return view('family/edit')->with('family', $a);
        
         
        
    }

    
    public function update(Request $request, $id)
    {
        //validation
        $this->validate($request, 
        [
            
        ]
        );
        //Find personal info to edit
        $a = Family::find($id);
        $a->spouse_surname = $request->input('spouse_surname');
        $a->spouse_firstname = $request->input('spouse_firstname');
        $a->spouse_middlename = $request->input('spouse_middlename');
        $a->spouse_name_ext = $request->input('spouse_name_ext');
        $a->spouse_occupation = $request->input('spouse_occupation');
        $a->spouse_employer_business = $request->input('spouse_employer_business');
        $a->spouse_business_address = $request->input('spouse_business_address');
        $a->spouse_tel_number = $request->input('spouse_tel_number');
        $a->father_surname = $request->input('father_surname');
        $a->father_firstname = $request->input('father_firstname');
        $a->father_middlename = $request->input('father_middlename');
        $a->father_name_ext = $request->input('father_name_ext');
        $a->mother_maiden_name = $request->input('mother_maiden_name');
        $a->mother_surname = $request->input('mother_surname');
        $a->mother_firstname = $request->input('mother_firstname');
        $a->mother_middlename = $request->input('mother_middlename');
        $a->save();
        return redirect('family')->with('success', 'Family Information Updated');
    }

    public function destroy($id)
    {
        $a = Family::find($id);
        $a->delete();
        return redirect('/family')->with('success', 'Family Information Updated');
    }
}
