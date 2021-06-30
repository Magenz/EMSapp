@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-dark">Educations</div>

                <div class="card-body">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                Add New Education
            </div>
            <div class="">
                <a class="btn btn-primary" href="{{ route('education.index') }}" title="Go back"> <i class="fas fa-backward ">  Back</i> </a>
            </div>
        </div>
    </div>



   @include('inc/messages')

    <div class="w-2/3 mx-auto">
        <div class="bg-white shadow-md rounded my-6">
                <form action="{{route('education.store')}}" method="POST">
                    @csrf  
                    <div class="row">
                       {{-- textfields --}}
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Level</strong>
                                <input type="text" name="level" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>School</strong>
                                <input type="text" name="school" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Degree / Course</strong>
                                <input type="text" name="degree_course" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>From</strong>
                                <input type="text" name="attendance_from" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>To</strong>
                                <input type="text" name="attendance_to" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Units Earned</strong>
                                <input type="text" name="units_earned" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Year Graduated</strong>
                                <input type="text" name="graduate_year" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Awards / Scholarship</strong>
                                <input type="text" name="awards_scholarship" class="form-control">
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
