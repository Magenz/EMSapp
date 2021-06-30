@extends('layouts.app')

@section('content')
<div class="container">
    @include('inc/messages')
        @if (is_null($family))
        {{-- create will show --}}
            @include('family.create')
        @else
        {{-- profile will show --}}
        <div class="d-flex flex-row flex-wrap justify-content-center">
                <div class="px-5">
                <h3 class="text-dark"><strong>Family Information</strong></h3> 
                </div>
                <div><a href="/family/{{$family->id}}/edit">
                <button class="btn btn-secondary pull-right">
                    <div class="d-flex ">
                        <div>
                            <i class="fa fa-edit "></i>
                        </div>
                        <div class="ml-2">
                            Edit
                        </div>
                        </div>   
                </button>
                </a>
                </div>
                </div>
        <div class="d-flex flex-row flex-wrap justify-content-center">
                @include('family.show')
        </div>
    @endif
</div>


    
@endsection
