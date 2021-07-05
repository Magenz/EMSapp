@extends('layouts/app')

@section('content')
    <h1>Admin Panel</h1>

@auth
@if (auth()->user()->is_admin)
     <h1>You are Admin</h1>
    @foreach ($list as $p)
 <h1>{{$p->surname}}</h1>
 <h1>{{$p->user_id}}</h1>
 <a class="text-light" href="/admin/{{$p->user_id}}">show</a>
 <hr>
    @endforeach
{{$list->links()}}
@endif
@endauth
@guest
    <h1>You are not authorized to view this page.</>
@endguest
@endsection

