@extends('layouts.app')

@section('content')
<div class="bg-light  p-3 card">
    <h1>{{$posts->title}}</h1>
    <hr>
    <h5>{{$posts->body}}</h5>
    <br>
    <br>
    <h6>Written By:<strong class="text-indigo"> {{$posts->user->name}}</strong></h6>
    {{$posts->created_at}}
</div>

@endsection
