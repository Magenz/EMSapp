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

<div class="d-flex border bg-green p-2 col-md-6">
    <div class=" p-1">
        <b><p>Sort Employees By:</p></b>
    </div>
     <div class=" p-1">
        <button class="bg-light btn elevation-2">Birthday</button>
    </div>
    <div class=" p-1">
        <button class="bg-light btn elevation-2" >Surname</button>
    </div>
    <div class=" p-1">
        <button class="bg-light btn elevation-2">First Name</button>
    </div>
    
</div>



@auth
@if (auth()->user()->is_admin)
     <hr>

    
     {{-- {{array_search("dingil", $list-);}} --}}
     
 @foreach ($list as $p)

 <h6>{{$p->surname}}</h6>
 
 <a href="/admin/{{$p->user_id}}"><button class="elevation-1 btn btn-light"> show</button></a>
 <hr>
    @endforeach
{{$list->links()}}
@endif
@endauth
@guest
    <h1>You are not authorized to view this page.</>
@endguest
@endsection

