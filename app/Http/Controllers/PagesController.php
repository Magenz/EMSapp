<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
//define pages here
    public function index(){
        return view('pages/index');
    }
    public function personal_information(){
        return view('pages/personal_information');
    }
    public function children(){
        return view('pages/children');
    }
    public function education(){
        return view('pages/education');
    }
    public function elligibility(){
        return view('pages/elligibility');
    }
    public function learning_and_development(){
        return view('pages/learning_and_development');
    }
    public function profile(){
        return view('pages/profile');
    }
    public function refference(){
        return view('pages/refference');
    }
    public function voluntary_work(){
        return view('pages/voluntary_work');
    }
    public function work_experience(){
        return view('pages/work_experience');
    }
}
