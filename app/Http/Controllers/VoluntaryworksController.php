<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Voluntarywork;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class VoluntaryworksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    //with pagination, this is how u do it =) im a fcking GOD
    $a = Auth::user();
    $user = User::find($a->id)->Voluntarywork()->paginate(10);
    return view('voluntarywork.index')->with('voluntarywork', $user);
    }
    // points to create view
    public function create()
    {
        return view('voluntarywork/create');
    }
    // storing function
    public function store(Request $request)
    {
        //validation
        $this->validate($request, 
        [
            'workPosition' => 'required'
        ]);
        //add new work experience
        $a = new Voluntarywork;
        $a->workPosition = $request->input('workPosition');
        $a->workPlace = $request->input('workPlace');
        $a->workAddress = $request->input('workAddress');
        $a->dateFrom = $request->input('dateFrom');
        $a->dateTo = $request->input('dateTo');
        //add user_id into ID of user
        $user = Auth::user();
        $a->user_id = $user->id;
        $a->save();
        return redirect('voluntarywork')->with('success', 'Voluntary Work Added');
    }
 
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $a = Voluntarywork::find($id);
        
        return view('voluntarywork/edit')->with('voluntarywork', $a);
    }

    
    public function update(Request $request, $id)
    {
        //validation
        $this->validate($request, 
        [
            'workPosition' => 'required'
        ]
        );
        //Find work to edit
        $a = Voluntarywork::find($id);
        $a->workPosition = $request->input('workPosition');
        $a->workPlace = $request->input('workPlace');
        $a->workAddress = $request->input('workAddress');
        $a->dateFrom = $request->input('dateFrom');
        $a->dateTo = $request->input('dateTo');
        $a->save();
        return redirect('voluntarywork')->with('success', 'Voluntary Work updated');
    }

    public function destroy($id)
    {
        $a = Voluntarywork::find($id);
        $a->delete();
        return redirect('/voluntarywork')->with('success', 'Voluntary Work Deleted');
    }
}
