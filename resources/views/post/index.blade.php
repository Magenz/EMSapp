{{--
quick note:
$posts comes from postsController
    --}}

@extends('layouts/app')
@section('content')
@include('inc/messages')
<h2>posts</h2>
@auth
        <a href="/post/create">
            <button type="submit" class="btn btn-secondary mb-2">
            Create New Post
            </button>
        </a>  
@endauth

@if (count($posts)>0)
    @foreach ($posts as $post)
       <div class="card p-2">
            <a href="/post/{{$post->id}}"><h3>{{$post->title}}</h3></a>
            <small>written on: {{$post->created_at}} by: {{$post->user->name}}</small><hr>
            <div class="d-flex flex-row">
                @auth
                <div class="p-2">
                    {{-- edit --}}
                    <a href="/post/{{$post->id}}/edit">
                        <button class ="btn btn-primary">Edit </button>
                    </a>
                </div>
                <div class="p-2">
                    {{-- delete --}}
                    <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" title="delete" class="btn btn-danger pull-right">
                        Delete
                        </button>
                    </form>    
                </div>
                @endauth
    
              </div>
            
       
        </div> 
    @endforeach
    {{$posts->links()}}
@else
    <p>No post Found</p>
@endif


    
@endsection