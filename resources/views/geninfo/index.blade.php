@extends('layouts.app')

@section('content')
<div class="container">
    @include('inc/messages')
        @if (is_null($pinfo))
        {{-- create will show --}}
            @include('geninfo.create')
        @else
        {{-- profile will show --}}
        <div class="d-flex flex-row flex-wrap justify-content-evenly">
                <div class="px-5">
                <h3 class="text-dark">General Information</h3> 
                </div>
                <div><a href="/geninfo/{{$pinfo->id}}/edit">
                <button class="btn btn-primary pull-right">Edit</button>
                </a>
                </div>
        </div>
    <div class="d-flex flex-row flex-wrap justify-content-evenly">
             @include('geninfo.show')
        @endif
    </div>
</div>


    
@endsection
