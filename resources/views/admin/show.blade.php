@extends('layouts/app')

@section('content')
    <h1>Details</h1>
<hr>
@auth
@if (auth()->user()->is_admin)



<h1>Learning and Development</h1>
@foreach ($lad as $p)
{{$p->title}}
@endforeach
<hr>

<h1>address</h1>
{{$pinfo}}
<hr>

<h1>Eligibility</h1>
@foreach ($eligibility as $p)
{{$p->eligibility_name}}
@endforeach

<hr>



<h1>Children</h1>
@include('admin.children')
<hr>

@endif
@endauth
@guest
    <h1>You are not authorized to view this page.</>
@endguest
@endsection

