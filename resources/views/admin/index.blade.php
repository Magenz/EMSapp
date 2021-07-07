<head>
    
@extends('layouts/app')

@section('content')
<div class=" d-flex border bg-green p-3 col-md-6">
      <form action="">
        <div class="input-group">
        <input type="text" id="fname" name="filter[surname]" value="" class="form-control" placeholder="Search Surname"><br>
        <input type="submit" value="Submit" class="btn btn-outline-light ">
        </div>
      </form> 
    
</div>

<div class="d-flex border bg-green p-2 col-md-10 col-lg-6">
    <div class=" p-1">
        <b><p>Sort Employees By:</p></b>
    </div>
     <div class=" p-1">
        <button class="bg-light btn elevation-2 btn-sm">Birthday</button>
    </div>
    <div class=" p-1">
        <button class="bg-light btn elevation-2 btn-sm" >Surname</button>
    </div>
    <div class=" p-1">
        <button class="bg-light btn elevation-2 btn-sm">First Name</button>
    </div>
</div>

<div class="d-flex border bg-green p-2 col-md-6">
    <div class=" p-1">
        <b><p>Order by:</p></b>
    </div>
    <div class=" p-1">
        <a href="/admin/order=asc">
        <button class="bg-primary btn elevation-2 btn-sm">Ascending</button>
        </a>
    </div>
    <div class=" p-1">
        <a href="/admin/order=desc">
        <button class="bg-secondary btn elevation-2 btn-sm">Descending</button>
        </a>
    </div>
</div>



@auth
@if (auth()->user()->is_admin)
     <hr>
     
 @foreach ($list as $p)
 <div class="card p-2">
    <div class="d-flex flex-row">
        <h5 class="mr-1">{{$p->surname}},</h5><h5 class="mr-1">{{$p->first_name}},</h5><h5>{{$p->middle_name}}</h5>
     </div>
     <div class="d-flex flex-row">
        <strong class="mr-1">Birth Date:</strong> <p id="b_date">{{$p->birth_date}}</p>
     </div>
     <script>  
        var temp = '{{$p->birth_date}}';
        var dob = new Date(temp); 
        var month_diff = Date.now() - dob.getTime();  
        var age_dt = new Date(month_diff);   
        var year = age_dt.getUTCFullYear();  
        var age = Math.abs(year - 1970);   
        document.write("Age:" +" "+ age + " years old");  
    </script>  

     <a href="/admin/{{$p->user_id}}"><button class="elevation-1 btn btn-light"> Full Details</button></a>
 </div>
 
    @endforeach
{{$list->links()}}
@endif
@endauth
@guest
    <h1>You are not authorized to view this page.</>
@endguest
@endsection

