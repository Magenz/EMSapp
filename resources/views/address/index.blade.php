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
                <h4 class="text-primary">Address Details</h4> 
                </div>
                <div><a href="/address/{{$address->id}}/edit">
                <button class="btn btn-primary pull-right">Edit</button>
                </a>
            </div>
        <div class="d-flex flex-row flex-wrap justify-content-evenly">
             @include('address.show')
        </div>
             @endif
</div>


    
@endsection
