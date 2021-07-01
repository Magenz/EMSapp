@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            
            <div class="">
                <a class="btn bg-secondary mb-2" href="{{ route('post.index') }}" title="Go back"> <i class="fas fa-backward ">  Back</i> </a>
            </div>
        </div>
    </div>



   @include('inc/messages')

    <div class="w-2/3 mx-auto">
        <div class="bg-white card rounded my-6 p-3">
            <h3 class="">
                Create New Post
            </h3>
            <hr>
                <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf  
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Title Name:</strong>
                                <input type="text" name="title" class="form-control" placeholder="Title">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 px-7">
                            <div class="form-group">
                                <strong>Body:</strong>
                                <textarea class="form-control" style="height:120px" name="body"
                                    placeholder="Body"></textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7">
                            <div class="form-group">
                               {{Form::file('cover_image')}}
                            </div>
                        </div>
                     
                    
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center pb-7">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
        </div>
</div>

@endsection
