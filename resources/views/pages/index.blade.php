@extends('layouts/app')


@section('content')
@auth
<h1 class="text-green">Employee Management System</h1>
<div class="d-flex">
    <div>
      <i class="fa fa-tachometer-alt mr-1"></i>
    </div>
    <div>
      <p>Personal Dashboard</p> 
    </div>
 </div>
  
@if (auth()->user()->is_admin)
<small>You are logged in as Admin</small>
@else
<small>You are logged in as User</small>
@endif
<hr>
<div class=""> <h1>Latest News</h1></div>

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



@endauth

@guest
<div class=" d-flex flex-column card p-3 col-md-6">
  <div>
    <h1 class="text-green">Employee Management System</h1>
  </div>
  
  <div class="text-info">
    <h3 >National Irrigation Administration</h3>
  </div>
  <div class="text-info">
    <h5>Chico River Pump Irrigation Project</h5>
  </div>

  <hr>


  <div>
    <h6>You should <a href="/login">Login</a> to gain access</h6>
  </div>
  <div>
    <h6>Or <a href="/register">Register</a> if you don't have account</h6>
  </div>
  
 
</div>

   
@endguest



@endsection

