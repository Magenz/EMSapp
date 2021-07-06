{{--
quick note:
$posts comes from postsController
    --}}

@extends('layouts/app')
@section('content')
@if (auth()->user()->is_admin)

@include('inc/messages')
<h1 class="text-light"><strong>All News</strong></h1>
<hr>
@auth
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
@endauth

@if (count($posts)>0)
    @foreach ($posts as $post)
       <div class="card p-2">
            <a href="/post/{{$post->id}}" class="text-green"><h3>{{$post->title}}</h3></a>
            <small class="text-dark">written on: {{$post->created_at}} by: {{$post->user->name}}</small><hr>
            <div class="d-flex flex-row">
                @auth
                @if ($post->user_id == auth()->user()->id)
                    
                <div class="p-2">
                    {{-- edit --}}
                    <a href="/post/{{$post->id}}/edit">
                        <button class ="btn btn-primary">
                            <div class="d-flex">
                                <div>
                                    <i class="fa fa-edit"></i>
                                </div>
                                <div class="ml-2">
                                    Edit
                                </div>
                                </div>  
                        </button>
                    </a>
                </div>
                <div class="p-2">
                    {{-- delete --}}
                    <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" title="delete" class="btn btn-danger pull-right">
                            <div class="d-flex">
                                <div>
                                    <i class="fa fa-trash"></i>
                                </div>
                                <div class="ml-2">
                                    Del
                                </div>
                                </div>  
                        </button>
                    </form>    
                </div>

                @endif
                @endauth
    
              </div>
            
       
        </div> 
    @endforeach
    {{$posts->links()}}
@else
    <p>No post Found</p>
@endif


@endif
@endsection