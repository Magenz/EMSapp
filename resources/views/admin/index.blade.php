<head>
    
@extends('layouts/app')

@section('content')
<div class=" d-flex border bg-green p-3 ">
      <form action="">
        <div class="input-group">
        <input type="text" id="fname" name="filter[surname]" value="" class="form-control" placeholder="Search Surname"><br>
        <input type="submit" value="Submit" class="btn btn-outline-light ">
        </div>
      </form> 
</div>    
<div >
    <form name="form" action="" method="get" class="d-flex bg-green p-1">
        <div class="mx-1">
        <input type="text" name="minage" id="minage" value="" class="form-control" placeholder="minimum age">
        </div> 
        <div class="mx-1">
        <input type="text" name="maxage" id="maxage" value="" class="form-control" placeholder="maximum age">
        </div>
        <div class="mx-1">
            <input type="submit" value="Submit" class="btn btn-outline-light ">
        </div>
    </form>
</div>  
    {{-- min age and max age --}}
   

        @php
        if (array_key_exists('minage', $_GET) &&  array_key_exists('maxage', $_GET)) {
            $minage = $_GET['minage']; 
            $maxage = $_GET['maxage'];
        }
        
        else {
            $minage = 0;
            $maxage = 666;
        }           
        @endphp
    {{-- end --}}


<div class="d-flex border bg-green p-2 align-items-center">
    {{-- <div class="mr-2"><b>Order By:</b></div>
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
    <div class="ml-5"><b>Total:</b> {{count($list)}}</div> --}}
</div>



@auth
@if (auth()->user()->is_admin)
     <hr>  
 @foreach ($list as $p)
                                    @php
                                    if (is_null($p->birth_date)) {
                                        
                                    }
                                    else{
                                    //date in mm/dd/yyyy format; or it can be in other formats as well
                                        $birthDate = strval($p->birth_date);
                                        //explode the date to get month, day and year
                                        $birthDate = explode("/", $birthDate);
                                        //get age from date or birthdate
                                        $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
                                        ? ((date("Y") - $birthDate[2]) - 1)
                                        : (date("Y") - $birthDate[2]));
                                        
                                    }  
                                    @endphp

 @if ($age>=$minage and $age<=$maxage)

 <div class="card p-2">
    <div class="d-flex flex-row">
        <h5 class="mr-1">{{$p->surname}},</h5><h5 class="mr-1">{{$p->first_name}},</h5><h5>{{$p->middle_name}}</h5>
     </div>
     <div class="d-flex flex-row">
        <strong class="mr-1">Birth Date:</strong> <p id="b_date">{{$p->birth_date}}</p>
     </div>
                            @php
                                if (is_null($p->birth_date)) {
                                    echo "Birth Date Not set" ;
                                }
                                else{
                                //date in mm/dd/yyyy format; or it can be in other formats as well
                                    $birthDate = strval($p->birth_date);
                                    //explode the date to get month, day and year
                                    $birthDate = explode("/", $birthDate);
                                    //get age from date or birthdate
                                    $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
                                    ? ((date("Y") - $birthDate[2]) - 1)
                                    : (date("Y") - $birthDate[2]));
                                    echo "Age is:" . $age;
                                }  
                                @endphp
     <a href="/admin/{{$p->user_id}}"><button class="elevation-1 btn btn-light"> Full Details</button></a>
 </div>

    @endif
    @endforeach
{{$list->links()}}
@endif





@endauth
@guest
    <h1>You are not authorized to view this page.</script>
@endguest
@endsection

