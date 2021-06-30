@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-dark">Eligibility</div>

                <div class="card-body">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                Edit Eligibility
            </div>
            <div class="">
                <a class="btn btn-primary" href="{{ route('eligibility.index') }}" title="Go back"> <i class="fas fa-backward ">  Back</i> </a>
            </div>
        </div>
    </div>



   @include('inc/messages')

    <div class="w-2/3 mx-auto">
        <div class="bg-white shadow-md rounded my-6">
                <form action="{{route('eligibility.update', $eligibility->id)}}" method="POST">
                    @csrf 
                    @method('PUT') 
                    <div class="row">
                       {{-- textfields --}}
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Eligibility</strong>
                                <input type="text" name="eligibility_name" value="{{$eligibility->eligibility_name}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Rating</strong>
                                <input type="text" name="rating" value="{{$eligibility->rating}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Date Taken</strong>
                                <input type="text" name="exam_date" value="{{$eligibility->exam_date}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Place of Examination</strong>
                                <input type="text" name="exam_place" value="{{$eligibility->exam_place}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>License Number</strong>
                                <input type="text" name="license_number" value="{{$eligibility->license_number}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>License Date of Validity</strong>
                                <input type="text" name="license_date_validity" value="{{$eligibility->license_date_validity}}" class="form-control">
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
