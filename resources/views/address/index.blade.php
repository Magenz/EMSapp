@extends('layouts.app')

@section('content')

<div class="container">
    @include('inc/messages')
        @if (is_null($address))
        {{-- create will show --}}
            @include('address.create')
        @else
        {{-- profile will show --}}
            <div>
                <h1 class="text-dark">Address Details</h1> 
                </div>
                <div><a href="/address/{{$address->id}}/edit">
                <button class="btn btn-secondary">
                    <div class="d-flex">
                        <div>
                            <i class="fa fa-edit"></i>
                        </div>
                        <div class="ml-2">
                            Edit
                        </div>
                        </div>  
                </button>
                </a>
            </div>
        <div class="d-flex flex-row flex-wrap justify-content-evenly">
             @include('address.show')
        </div>
             @endif
</div>


    
@endsection
