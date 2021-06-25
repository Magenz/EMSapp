@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('work experience') }}</div>

                <div class="card-body">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                Edit Experience
            </div>
            <div class="">
                <a class="btn btn-primary" href="{{ route('geninfo.index') }}" title="Go back"> <i class="fas fa-backward "><< Back</i> </a>
            </div>
        </div>
    </div>



   @include('inc/messages')

    <div class="w-2/3 mx-auto">
        <div class="bg-white shadow-md rounded my-6">
                <form action="{{route('geninfo.update', $geninfo->id)}}" method="POST">
                    @csrf 
                    @method('PUT') 
                    <div class="row">
                       {{-- textfields --}}
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Surname</strong>
                                <input type="text" name="surname" value="{{$geninfo->surname}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>First Name</strong>
                                <input type="text" name="first_name" value="{{$geninfo->first_name}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Middle Name</strong>
                                <input type="text" name="middle_name" value="{{$geninfo->middle_name}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Name Extention</strong>
                                <input type="text" name="name_extention" value="{{$geninfo->name_extention}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Citizenship</strong>
                                <input type="text" name="citizenship" value="{{$geninfo->citizenship}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Civil Status</strong>
                                <input type="text" name="salaryGrade" value="{{$geninfo->civil_status}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Gender</strong>
                                <input type="text" name="appointmentStatus" value="{{$geninfo->gender}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Birth Date</strong>
                                <input type="text" name="govService" value="{{$geninfo->birth_date}}" class="form-control">
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
