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
                <a class="btn btn-primary" href="{{ route('workexp.index') }}" title="Go back"> <i class="fas fa-backward "><< Back</i> </a>
            </div>
        </div>
    </div>



   @include('inc/messages')

    <div class="w-2/3 mx-auto">
        <div class="bg-white shadow-md rounded my-6">
                <form action="{{route('workexp.update', $workexp->id)}}" method="POST">
                    @csrf 
                    @method('PUT') 
                    <div class="row">
                       {{-- textfields --}}
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>From</strong>
                                <input type="text" name="dateFrom" value="{{$workexp->dateFrom}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>To</strong>
                                <input type="text" name="dateTo" value="{{$workexp->dateTo}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Position / Title</strong>
                                <input type="text" name="positionTitle" value="{{$workexp->positionTitle}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Company/Department</strong>
                                <input type="text" name="department" value="{{$workexp->department}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Salary</strong>
                                <input type="text" name="monthlySalary" value="{{$workexp->monthlySalary}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Salary Grade</strong>
                                <input type="text" name="salaryGrade" value="{{$workexp->salaryGrade}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Appointment Status</strong>
                                <input type="text" name="appointmentStatus" value="{{$workexp->appointmentStatus}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Government Service (Yes or No)</strong>
                                <input type="text" name="govService" value="{{$workexp->govService}}" class="form-control">
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
