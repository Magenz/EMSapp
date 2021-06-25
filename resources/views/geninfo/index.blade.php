@extends('layouts.app')

@section('content')
<div class="container">
    @include('inc/messages')
        @if (is_null($pinfo))
        {{-- create will show --}}
            @include('geninfo.create')
        @else
        {{-- profile will show --}}
            <div>
                <h4 class="text-primary">General Information</h4> 
                </div>
                <div><a href="/geninfo/{{$pinfo->id}}/edit">
                <button class="btn btn-primary pull-right">Edit</button>
                </a>
            </div>
    <div class="d-flex flex-row flex-wrap justify-content-evenly">
             @include('geninfo.show')
        @endif
    </div>
</div>


    
@endsection
