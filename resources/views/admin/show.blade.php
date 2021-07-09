@extends('layouts/app')


{{-- 
-address        $address)      
-pinfo          $personalinfo) 
-family         family)
-eligibility    $eligibility)
voluntarywork  $voluntarywork)        
workexperience $workexperience)
children       $children)
education      $education)
lad            $lad);
--}}
@section('content')
    <h3>Details</h3>
<div class="border-top my-1"></div>
@auth
@if (auth()->user()->is_admin)


       
        
     
      
{{-- pinfo --}}
<div class="d-flex flex-row">
    
    <button class="btn col-xl-12 bg-light" type="button" data-toggle="collapse" data-target="#pinfo">
      <h4> Personal Info </h4>  
    </button></div>
    <div class="collapse" id="pinfo">
        <div class="card card-body">
            <div class="d-flex flex-row flex-wrap">
                @include('admin.pinfo')
            </div>
        </div>
    </div>

<div class="border-top my-1">
</div>

{{-- family --}}
<div class="d-flex flex-row">
    
    <button class="btn col-xl-12 bg-light" type="button" data-toggle="collapse" data-target="#family">
      <h4> Family </h4>  
    </button></div>
    <div class="collapse" id="family">
        <div class="card card-body">
            @include('admin.family')
        </div>
    </div>

<div class="border-top my-1">
</div>

{{-- children --}}
<div class="d-flex flex-row">
    
    <button class="btn col-xl-12 bg-light" type="button" data-toggle="collapse" data-target="#children">
      <h4> Children </h4>  
    </button></div>
    <div class="collapse" id="children">
        <div class="card card-body">
            @include('admin.children')
        </div>
    </div>

<div class="border-top my-1">
</div>

{{-- education --}}
<h2>Education</h2>
@include('admin.education')
<div class="border-top my-1"></div>

{{-- eligibility --}}
<h2>Eligibility</h2>
@include('admin.eligibility')
<div class="border-top my-1"></div>

{{-- voluntarywork --}}
<h2>Voluntary Vork</h2>
@include('admin.voluntarywork')
<div class="border-top my-1"></div>

{{-- workexperience --}}
<h2>Work Experiences</h2>
@include('admin.workexperience')
<div class="border-top my-1"></div>
{{-- lad --}}
<h2>Seminars and Trainings</h2>
@include('admin.lad')
<div class="border-top my-1"></div>

@endif
@endauth
@guest
    <h2>You are not authorized to view this page.</>
@endguest
@endsection

