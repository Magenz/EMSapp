@extends('layouts/app')

@section('content')
@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
    <h3>hobbies</h3>
@endsection

