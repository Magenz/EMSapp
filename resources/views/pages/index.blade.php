@extends('layouts/app')


@section('content')
<h1 class="text-light">Employee Management System</h1>
  <div class="d-flex">
    <div>
      <i class="fa fa-tachometer-alt mr-1"></i>
    </div>
    <div>
      <p>Personal Dashboard</p> 
    </div>
  </div>
  
<div class="d-flex flex-wrap justify-content-center">

  <div class="card text-dark m-1 col-md-5">
    <div class="card-body">
      <h5 class="card-title">My Personal Information</h5>
      <p class="card-text">Contains most of your personal details.</p>
     
      <div class="d-flex flex-column">
        <a href="geninfo" class="btn btn-success mt-1">General Information</a>
        <a href="address" class="btn btn-success mt-1">Address</a>
        <a href="eligibility" class="btn btn-success mt-1">Eligibility</a>
      </div>
    
    </div>
  </div>

  <div class="card text-dark m-1 col-md-5">
    <div class="card-body">
      <h5 class="card-title">My Educational Background</h5>
      <p class="card-text">Contains your school details,<br> seminars, and other learning activities.</p>
      <div class="d-flex flex-column">
      <a href="#" class="btn btn-success mt-1">School</a>
      <a href="#" class="btn btn-success mt-1">Learning and Development</a>
      </div>
    </div>
  </div>

  <div class="card text-dark m-1 col-md-5">
    <div class="card-body">
      <h5 class="card-title">Family Background</h5>
      <p class="card-text">Contains my family background information.</p>
      <div class="d-flex flex-column">
      <a href="#" class="btn btn-success mt-1">Parents</a>
      <a href="#" class="btn btn-success mt-1">My Children</a>
      </div>
    </div>
  </div>

  <div class="card text-dark m-1 col-md-5">
    <div class="card-body">
      <h5 class="card-title">Experience</h5>
      <p class="card-text">Contains my work related experiences.</p>
      <div class="d-flex flex-column">
      <a href="workexp" class="btn btn-success mt-1">Work Experiences</a>
      <a href="#" class="btn btn-success mt-1">Voluntary Works</a>
      </div>
    </div>
  </div>

   
</div> 
@endsection

