@extends('layouts.app')

@section('content')
<h1 class="text-light"><strong>My posted News</strong></h1>
<hr>
<div class="text-dark">
    <div class="row justify-content-center">
        <div class="col-md-12">
                {{-- create post--}}
                <a href="/post/create">
                    <button type="submit" class="btn bg-green border-dark mb-3">
                    <div class="d-flex">
                        <div>
                            <i class="fa fa-plus-circle"></i>
                        </div>
                        <div class="ml-2">
                            Create New Post
                        </div>
                        </div>  
                    </button>
                </a>  
            <div class="card">
                <div class="card-header">{{ __('My Post') }}</div>

                <div class="card-body">
                
               
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
