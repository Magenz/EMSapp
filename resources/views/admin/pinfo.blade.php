@if ($pinfo)
    

{{-- // --}}
<div class="card col-md-5 bg-light m-1 p-3">
    <div class="">
    <h6>     <p class="text-secondary">Full Name</p></h6>
    </div>
    <div class="">
    <h6><div class="p-2">{{$pinfo->surname}}, {{$pinfo->first_name}} {{$pinfo->name_extention}}, {{$pinfo->middle_name}}</div></h6>
    </div>
</div>          
    
<div class="card col-md-3 bg-light m-1 p-3">
<div class=" ">
    <h6><p class="text-secondary">Citizenship</p></h6>
</div>
      
<div>
    <h6>{{$pinfo->citizenship}}</h6>
</div>
</div>
<div class="card col-md-3 bg-light m-1 p-3">
<div class=" ">
<h6> <p class="text-secondary">Civil Status</p></h6>
</div>
  
<div>
<h6>{{$pinfo->civil_status}}</h6>
</div>
</div>
<div class="card col-md-2 bg-light m-1 p-3">

<div class=" ">
<h6> <p class="text-secondary">Gender</p></h6>
</div>
  
<div>
<h6>{{$pinfo->gender}}</h6>
</div>
</div>

<div class="card col-md-3 bg-light m-1 p-3">
<div class=" ">
<h6>  <p class="text-secondary">Birth Date <small>(mm/dd/yyyy)</small></p></h6>
</div>
  
<div>
<h6>{{$pinfo->birth_date}}</h6>
</div>
</div>

<div class="card col-md-6 bg-light m-1 p-3">
<div class=" ">
<h6>  <p class="text-secondary">Birth Place</p></h6>
</div>
  
<div>
<h6>{{$pinfo->birth_place}}</h6>
</div>
</div>

<div class="card col-md-4 bg-light m-1 p-3">
<div class=" ">
<h6>  <p class="text-secondary">Height</p></h6>
</div>
  
<div>
<h6>{{$pinfo->height}}</h6>
</div>
</div>

<div class="card col-md-4 bg-light m-1 p-3">
<div class=" ">
<h6>  <p class="text-secondary">Weight</p></h6>
</div>
  
<div>
<h6>{{$pinfo->weight}}</h6>
</div>
</div>

<div class="card col-md-3 bg-light m-1 p-3">
<div class=" ">
<h6>   <p class="text-secondary">Blood Type</p></h6>
</div>
  
<div>
<h6>{{$pinfo->blood_type}}</h6>
</div>
</div>

<div class="card col-md-3 bg-light m-1 p-3">
<div class=" ">
<h6>   <p class="text-secondary">GSIS</p></h6>
</div>
  
<div>
<h6>{{$pinfo->gsis}}</h6>
</div>
</div>
<div class="card col-md-4 bg-light m-1 p-3">
<div class=" ">
<h6>   <p class="text-secondary">PAGIBIG</p></h6>
</div>
  
<div>
<h6>{{$pinfo->pagibig}}</h6>
</div>
</div>

<div class="card col-md-4 bg-light m-1 p-3">
<div class=" ">
<h6>   <p class="text-secondary">PHILHEALTH</p></h6>
</div>
  
<div>
<h6>{{$pinfo->philhealth}}</h6>
</div>
</div>

<div class="card col-md-3 bg-light m-1 p-3">
<div class=" ">
<h6>   <p class="text-secondary">S.S.S.</p></h6>
</div>
  
<div>
<h6>{{$pinfo->sss}}</h6>
</div>
</div>
<div class="card col-md-3 bg-light m-1 p-3">
<div class=" ">
<h6>
<h6>   <p class="text-secondary">TIN</p></h6>
</h6>  
</div>
  
<div>
<h6>{{$pinfo->tin}}</h6>
</div>
</div>

<div class="card col-md-5 bg-light m-1 p-3">
<div class=" ">
<h6>    <p class="text-secondary">Contact Numbers</p></h6>
</div>
  
<div>
<h6>{{$pinfo->cp_number}} || {{$pinfo->tel_number}}</h6>
</div>
</div>


@else
    <h4>No Record Found</h4>
@endif