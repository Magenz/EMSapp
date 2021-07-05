<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//list of models-------------------------

// use App\Models\Address;
// use App\Models\Children;
// use App\Models\Education;
// use App\Models\Family;
// use App\Models\Eligibility;
// use App\Models\Learninganddevelopment;
// use App\Models\Voluntarywork;
// use App\Models\Workexperience;
// use Symfony\Component\HttpKernel\Profiler\Profile;

use App\Models\User;
use App\Models\Personalinfo;

//--------------------------------------

class AdminController extends Controller
{
    
    //checks if logged in
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    //with pagination, this is how u do it =) im a fcking GOD
    $a = Personalinfo::orderBy('surname', 'asc')->paginate(10);
    return view('admin.index')->with('list', $a);
    }

    public function show($id)
    {
     
        $address = User::find($id)->Address()->first();
        $personalinfo = User::find($id)->Personalinfo()->first();
        $family = User::find($id)->Family()->first();

//yow future dev na papalit sakin
//pag tinanggal mo yang paginate(), u need to re-structure the querry without pagination, so dagdag trabaho na naman.
//kaya sinet ko nalang into 666 para mag mukhang one single page lang, magkakaroon yan ng page 2 pag lumagpas ng 666.
//note : no need to have multiple pages sa table kasi nga this admin dashboard can serve as printable layout
//instead na pages, i implemented "collapse" functionality sa layout.
//goodluck and godbless.

        $eligibility = User::find($id)->Eligibility()->paginate(666);
        $voluntarywork = User::find($id)->Voluntarywork()->paginate(666);
        $workexperience = User::find($id)->Workexperience()->paginate(666);
        $children = User::find($id)->Children()->paginate(666);
        $education = User::find($id)->Education()->paginate(666);
        $lad = User::find($id)->Learninganddevelopment()->paginate(666);


        
        return view('admin.show')
        ->with('address', $address)
        ->with('pinfo', $personalinfo)
        ->with('family', $family)
        ->with('eligibility', $eligibility)
        ->with('voluntarywork', $voluntarywork)        
        ->with('workexperience', $workexperience)
        ->with('children', $children)
        ->with('education', $education)
        ->with('lad', $lad);
    }
}
