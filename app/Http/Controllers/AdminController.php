<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\QueryBuilder\QueryBuilder;
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
use Illuminate\Support\Facades\DB;

//--------------------------------------

class AdminController extends Controller
{
    //order by asc or desc
    public function order($orderby){
        if ($orderby=='asc') {
            $a = Personalinfo::orderBy('surname', 'asc');
            $b = QueryBuilder::for($a)
                ->allowedFilters('surname');
            $res = $b->paginate(10);
            //   return $res;
            return view('admin.index')->with('list', $res);
        } elseif($orderby=='desc') {
            $a = Personalinfo::orderBy('surname', 'desc');
            $b = QueryBuilder::for($a)
                ->allowedFilters('surname');
            $res = $b->paginate(10);
            //   return $res;
            return view('admin.index')->with('list', $res);
        }
        
    }
    
    public function age($bdate){

        $birthDate = $bdate;
        //explode the date to get month, day and year
        $birthDate = explode("/", $birthDate);
        //get age from date or birthdate
        $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
          ? ((date("Y") - $birthDate[2]) - 1)
          : (date("Y") - $birthDate[2]));
        return $age;
    }


    //checks if logged in
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    //with pagination, this is how u do it =) im a fcking GOD
    $a = Personalinfo::orderBy('surname', 'asc');
    $b = QueryBuilder::for($a)
        ->allowedFilters('surname');
    $res = $b->paginate(10);
    //   return $res;
    return view('admin.index')->with('list', $res);
    }

    public function show($id)
    {
     
        $address = User::find($id)->Address()->first();
        $personalinfo = User::find($id)->Personalinfo()->first();
        $family = User::find($id)->Family()->first();

        //if i get rid of paginate, it breaks T.T
        //The only fix is to restructure the querry

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
