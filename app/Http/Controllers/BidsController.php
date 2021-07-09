<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BidsController extends Controller
{
    public function index()
    {
    
    return view('Bids/index'); 
    }
  
    public function create()
    {
        //create page
    }
    
    public function store(Request $request)
    {
        //save
    }

    public function show($id)
    {
        //show
    }

    public function edit($id)
    {
       //edit

    }

    public function update(Request $request, $id)
    {
        //update
    }

    public function destroy($id)
    {
    //    delete
    }
}
