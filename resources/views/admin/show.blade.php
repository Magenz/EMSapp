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
<h2>Personal Info</h2>
@include('admin.pinfo')
<div class="border-top my-1"></div>

{{-- family --}}
<h2>Family</h2>
@include('admin.family')
<div class="border-top my-1"></div>

{{-- children --}}
<h2>Children</h2>
@include('admin.children')
<div class="border-top my-1"></div>

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

