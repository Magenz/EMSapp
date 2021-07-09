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
    <h3>Details of {{$pinfo->surname}}, {{$pinfo->first_name}} {{$pinfo->middle_name}}</h3>
<div class="border-top my-1"></div>
@auth
@if (auth()->user()->is_admin)
 
      
{{-- pinfo --}}
<div class="d-flex flex-row">
    
    <button class="btn text-left col-xl-12 bg-light" type="button" data-toggle="collapse" data-target="#pinfo">
      <h5> Personal Info </h5>  
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
    
    <button class="btn text-left col-xl-12 bg-light" type="button" data-toggle="collapse" data-target="#family">
      <h5> Family </h5>  
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
    
    <button class="btn text-left col-xl-12 bg-light" type="button" data-toggle="collapse" data-target="#children">
      <h5> Children </h5>  
    </button></div>
    <div class="collapse" id="children">
        <div class="card card-body">
            @include('admin.children')
        </div>
    </div>

<div class="border-top my-1">
</div>

{{-- education --}}
<div class="d-flex flex-row">
    
    <button class="btn text-left col-xl-12 bg-light" type="button" data-toggle="collapse" data-target="#education">
      <h5> Education </h5>  
    </button></div>
    <div class="collapse" id="education">
        <div class="card card-body">
            @include('admin.education')
        </div>
    </div>

<div class="border-top my-1">
</div>

{{-- eligibility --}}

<div class="d-flex flex-row">
    
    <button class="btn text-left col-xl-12 bg-light" type="button" data-toggle="collapse" data-target="#eligibility">
      <h5> Eligibility </h5>  
    </button></div>
    <div class="collapse" id="eligibility">
        <div class="card card-body">
            @include('admin.eligibility')
        </div>
    </div>

<div class="border-top my-1">
</div>

{{-- voluntarywork --}}


<div class="d-flex flex-row">
    
    <button class="btn text-left col-xl-12 bg-light" type="button" data-toggle="collapse" data-target="#voluntarywork">
      <h5> Voluntary Work </h5>  
    </button></div>
    <div class="collapse" id="voluntarywork">
        <div class="card card-body">
            @include('admin.voluntarywork')
        </div>
    </div>

<div class="border-top my-1">
</div>



{{-- workexperience --}}


<div class="d-flex flex-row">
    
    <button class="btn text-left col-xl-12 bg-light" type="button" data-toggle="collapse" data-target="#workexperience">
      <h5> Work Experience </h5>  
    </button></div>
    <div class="collapse" id="workexperience">
        <div class="card card-body">
            @include('admin.workexperience')
        </div>
    </div>

<div class="border-top my-1">
</div>

{{-- lad --}}
<div class="d-flex flex-row">
    
    <button class="btn text-left col-xl-12 bg-light" type="button" data-toggle="collapse" data-target="#lad">
      <h5>Seminars And Trainings </h5>  
    </button></div>
    <div class="collapse" id="lad">
        <div class="card card-body">
            @include('admin.lad')
        </div>
    </div>

<div class="border-top my-1">
</div>

@endif
@endauth
@guest
    <h2>You are not authorized to view this page.</>
@endguest
@endsection

