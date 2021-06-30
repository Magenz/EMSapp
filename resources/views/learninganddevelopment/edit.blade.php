@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-dark">Learning and Development</div>

                <div class="card-body">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                Edit Learning and Development
            </div>
            <div class="">
                <a class="btn btn-primary" href="{{ route('learninganddevelopment.index') }}" title="Go back"> <i class="fas fa-backward ">  Back</i> </a>
            </div>
        </div>
    </div>



   @include('inc/messages')

    <div class="w-2/3 mx-auto">
        <div class="bg-white shadow-md rounded my-6">
                <form action="{{route('learninganddevelopment.update', $learninganddevelopment->id)}}" method="POST">
                    @csrf 
                    @method('PUT') 
                    <div class="row">
                       {{-- textfields --}}
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Title</strong>
                                <input type="text" name="title" value="{{$learninganddevelopment->title}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Hours</strong>
                                <input type="text" name="hours" value="{{$learninganddevelopment->hours}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>From</strong>
                                <input type="text" name="dateFrom" value="{{$learninganddevelopment->dateFrom}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>To</strong>
                                <input type="text" name="dateTo" value="{{$learninganddevelopment->dateTo}}" class="form-control">
                            </div>
                        </div>
                       
                       {{-- end of textfields --}}
                    
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center pb-7">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
        </div>
</div>
</div>
</div>  </div>
</div>  </div>


@endsection
