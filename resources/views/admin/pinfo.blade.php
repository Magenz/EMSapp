{{-- pinfo --}}


{{$pinfo}}

<div class="elevation-1 bg-white p-2 d-flex flex-row col-lg-4 justify-content-around">
    <div class="pr-5">
        <p class="p-1 border-bottom">
            <b>
                First Name:
            </b>
        </p>
        <p>{{$pinfo->first_name}}</p>
    </div>
   
    <div class="pr-5">
        <p class="p-1  border-bottom">
            <b>
                Middle Name:
            </b>
        </p>
        <p>{{$pinfo->middle_name}}</p>
    </div>
    
    <div class="pr-5 ">
        <p class="p-1  border-bottom">
            <b>
                Last Name:
            </b>
        </p>
       {{$pinfo->surname}}
    </div>
    <div>
        <p class="p-1 border-bottom">
            <b>
                N. Ext:
            </b>
        </p>
       {{$pinfo->name_extention }}
    </div>
    
</div>