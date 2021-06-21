<?php

namespace App\Http\Controllers;

use App\Models\hobby;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class hobbyController extends Controller
{
    public function index()
    {
        return view('hobby/index');
    }

    public function create()
    {
        return view('hobby/create');
    } 

    public function store(Request $request)
    {
        $this->validate($request, [
            'hobby_name' => 'required'
        ]);
    }


}
