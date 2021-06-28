<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Address;
use Illuminate\Support\Facades\DB;

class AddressesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $a = Auth::user();
        $user = User::find($a->id)->Address;;
        return view('address.index')->with('address', $user);
    }

    // points to create view
    public function create()
    {
        return view('address/create');
    }

    // storing function
    public function store(Request $request)
    {
    //validation
    $this->validate($request, 
    [
        // 'surname' => 'required',
        // 'first_name' => 'required'
        
    ]
    );
//add new work experience
        $a = new Address;
        $a->res_hbl = $request->input('res_hbl');
        $a->res_street = $request->input('res_street');
        $a->res_subvil = $request->input('res_subvil');
        $a->res_barangay = $request->input('res_barangay');
        $a->res_city = $request->input('res_city');
        $a->res_province = $request->input('res_province');
        $a->res_zipcode = $request->input('res_zipcode');
        $a->perm_hbl = $request->input('perm_hbl');
        $a->perm_street = $request->input('perm_street');
        $a->perm_subvil = $request->input('perm_subvil');
        $a->perm_barangay = $request->input('perm_barangay');
        $a->perm_city = $request->input('perm_city');
        $a->perm_province = $request->input('perm_province');
        $a->perm_zipcode = $request->input('perm_zipcode');
       
//grabs the id from user table and put it to post user_id column
        $user = Auth::user();
        $a->user_id = $user->id;
        $a->save();

return redirect('address')->with('success', 'Address Info added');
}
 
    public function show($id)
    {
        //
    }

    public function edit($id)
    {   
        // $a = Address::find($user_id);
        $user = Auth::user();
        //this one ensures that it only querries your own data
        $a = DB::table('address')->where('user_id', $user->id)->find($id);
        return view('address/edit')->with('address', $a);  
    }

    
    public function update(Request $request, $id)
    {
        //validation
        $this->validate($request, 
        [
            // 'surname' => 'required',
            // 'first_name' => 'required'
        ]
        );
        //Find Address info to edit
        $a = Address::find($id);
        $a->res_hbl = $request->input('res_hbl');
        $a->res_street = $request->input('res_street');
        $a->res_subvil = $request->input('res_subvil');
        $a->res_barangay = $request->input('res_barangay');
        $a->res_city = $request->input('res_city');
        $a->res_province = $request->input('res_province');
        $a->res_zipcode = $request->input('res_zipcode');
        $a->perm_hbl = $request->input('perm_hbl');
        $a->perm_street = $request->input('perm_street');
        $a->perm_subvil = $request->input('perm_subvil');
        $a->perm_barangay = $request->input('perm_barangay');
        $a->perm_city = $request->input('perm_city');
        $a->perm_province = $request->input('perm_province');
        $a->perm_zipcode = $request->input('perm_zipcode');
        $a->save();
        return redirect('address')->with('success', 'Address Updated');
    }

    public function destroy($id)
    {
        $a = Address::find($id);
        $a->delete();
        return redirect('/address')->with('success', 'Address Updated');
    }
}
