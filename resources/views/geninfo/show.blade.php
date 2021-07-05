
<div class="card col-md-5 bg-light m-1 p-3">
            <div class="">
            <h5>     <p class="text-secondary">Full Name</p></h5>
            </div>
            <div class="">
            <h5><div class="p-2">{{$pinfo->surname}}, {{$pinfo->first_name}} {{$pinfo->name_extention}}, {{$pinfo->middle_name}}</div></h5>
            </div>
</div>          
            
<div class="card col-md-3 bg-light m-1 p-3">
        <div class=" ">
            <h5><p class="text-secondary">Citizenship</p></h5>
        </div>
              
        <div>
            <h5>{{$pinfo->citizenship}}</h5>
        </div>
</div>
<div class="card col-md-3 bg-light m-1 p-3">
    <div class=" ">
        <h5> <p class="text-secondary">Civil Status</p></h5>
    </div>
          
    <div>
        <h5>{{$pinfo->civil_status}}</h5>
    </div>
</div>
<div class="card col-md-2 bg-light m-1 p-3">
    
    <div class=" ">
        <h5> <p class="text-secondary">Gender</p></h5>
    </div>
          
    <div>
        <h5>{{$pinfo->gender}}</h5>
    </div>
</div>

<div class="card col-md-3 bg-light m-1 p-3">
    <div class=" ">
        <h5>  <p class="text-secondary">Birth Date <small>(mm/dd/yyyy)</small></p></h5>
    </div>
          
    <div>
        <h5>{{$pinfo->birth_date}}</h5>
    </div>
</div>

<div class="card col-md-6 bg-light m-1 p-3">
    <div class=" ">
        <h5>  <p class="text-secondary">Birth Place</p></h5>
    </div>
          
    <div>
        <h5>{{$pinfo->birth_place}}</h5>
    </div>
</div>

<div class="card col-md-4 bg-light m-1 p-3">
    <div class=" ">
        <h5>  <p class="text-secondary">Height</p></h5>
    </div>
          
    <div>
        <h5>{{$pinfo->height}}</h5>
    </div>
</div>

<div class="card col-md-4 bg-light m-1 p-3">
    <div class=" ">
        <h5>  <p class="text-secondary">Weight</p></h5>
    </div>
          
    <div>
        <h5>{{$pinfo->weight}}</h5>
    </div>
</div>

<div class="card col-md-3 bg-light m-1 p-3">
    <div class=" ">
        <h5>   <p class="text-secondary">Blood Type</p></h5>
    </div>
          
    <div>
        <h5>{{$pinfo->blood_type}}</h5>
    </div>
</div>

<div class="card col-md-3 bg-light m-1 p-3">
    <div class=" ">
        <h5>   <p class="text-secondary">GSIS</p></h5>
    </div>
          
    <div>
        <h5>{{$pinfo->gsis}}</h5>
    </div>
</div>
<div class="card col-md-4 bg-light m-1 p-3">
    <div class=" ">
        <h5>   <p class="text-secondary">PAGIBIG</p></h5>
    </div>
          
    <div>
        <h5>{{$pinfo->pagibig}}</h5>
    </div>
</div>

<div class="card col-md-4 bg-light m-1 p-3">
    <div class=" ">
        <h5>   <p class="text-secondary">PHILHEALTH</p></h5>
    </div>
          
    <div>
        <h5>{{$pinfo->philhealth}}</h5>
    </div>
</div>

<div class="card col-md-3 bg-light m-1 p-3">
    <div class=" ">
        <h5>   <p class="text-secondary">S.S.S.</p></h5>
    </div>
          
    <div>
        <h5>{{$pinfo->sss}}</h5>
    </div>
</div>
<div class="card col-md-3 bg-light m-1 p-3">
    <div class=" ">
    <h5>
        <h5>   <p class="text-secondary">TIN</p></h5>
    </h5>  
    </div>
          
    <div>
        <h5>{{$pinfo->tin}}</h5>
    </div>
</div>

<div class="card col-md-5 bg-light m-1 p-3">
    <div class=" ">
        <h5>    <p class="text-secondary">Contact Numbers</p></h5>
    </div>
          
    <div>
        <h5>{{$pinfo->cp_number}} || {{$pinfo->tel_number}}</h5>
    </div>
</div>


