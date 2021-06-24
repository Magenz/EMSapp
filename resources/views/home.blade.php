@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    {{-- create post--}}
                    <a href="/post/create">
                        <button class="btn btn-primary mb-2"> Create Post</button>
                    </a> 
                    <h3>Your Post</h3>
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        
                       @if (count($posts)>0)
                       
                            @foreach ($posts as $p)
                            <tr>
                                <td>{{$p->title}}</td>
                                <td><a href="/post/{{$p->id}}/edit">Edit</a></td>
                                <td>
                                    <form action="{{ route('post.destroy', $p->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" title="delete" class="btn btn-danger pull-right">
                                        Delete
                                        </button>
                                    </form>    
                                </td>
                            </tr>   
                            @endforeach
                        
                          @else
                                    <h5>You have no Post</h5>
                        @endif  
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
