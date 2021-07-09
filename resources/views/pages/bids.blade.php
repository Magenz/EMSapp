@extends('layouts/app')

@section('content')
    <h1>Bids</h1>

@auth
<h1>test logged in</h1>
@endauth

@guest
    <h1>test guest</h1>
@endguest

@endsection

