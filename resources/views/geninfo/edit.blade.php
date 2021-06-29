@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-dark">Work Experience</div>

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
                    <div class="d-flex flex-wrap justify-content-center">
                       {{-- textfields --}}
                        <div class="col-md-5 px-7 pt-2">
                            <div class="form-group">
                                <strong>Surname</strong>
                                <input type="text" name="surname" value="{{$geninfo->surname}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-5 px-7 pt-2">
                            <div class="form-group">
                                <strong>First Name</strong>
                                <input type="text" name="first_name" value="{{$geninfo->first_name}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-5 px-7 pt-2">
                            <div class="form-group">
                                <strong>Middle Name</strong>
                                <input type="text" name="middle_name" value="{{$geninfo->middle_name}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-5 px-7 pt-2">
                            <div class="form-group">
                                <strong>Name Extention eg. Jr/Sr<small> (leave it blank if not applicable)</small></strong>
                                <input type="text" name="name_extention" value="{{$geninfo->name_extention}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 px-7 pt-2">
                            <div class="form-group">
                                <strong>Citizenship</strong>
                                <input type="text" name="citizenship" value="{{$geninfo->citizenship}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3 px-7 pt-2">
                            <div class="form-group">
                                <strong>Civil Status</strong>
                                <input type="text" name="civil_status" value="{{$geninfo->civil_status}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3 px-7 pt-2">
                            <div class="form-group">
                                <strong>Gender</strong>
                                <input type="text" name="gender" value="{{$geninfo->gender}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3 px-7 pt-2">
                            <div class="form-group">
                                <strong>Birth Date mm/dd/yyyy</strong>
                                <input type="text" name="birth_date" value="{{$geninfo->birth_date}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-7 px-7 pt-2">
                            <div class="form-group">
                                <strong>Birth Place</strong>
                                <input type="text" name="birth_place" value="{{$geninfo->birth_place}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3 px-7 pt-2">
                            <div class="form-group">
                                <strong>Height</strong>
                                <input type="text" name="height" value="{{$geninfo->height}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3 px-7 pt-2">
                            <div class="form-group">
                                <strong>Weight</strong>
                                <input type="text" name="weight" value="{{$geninfo->weight}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4 px-7 pt-2">
                            <div class="form-group">
                                <strong>Blood Type</strong>
                                <input type="text" name="blood_type" value="{{$geninfo->blood_type}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-5 px-7 pt-2">
                            <div class="form-group">
                                <strong>GSIS</strong>
                                <input type="text" name="gsis" value="{{$geninfo->gsis}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-5 px-7 pt-2">
                            <div class="form-group">
                                <strong>PAGIBIG</strong>
                                <input type="text" name="pagibig" value="{{$geninfo->pagibig}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-5 px-7 pt-2">
                            <div class="form-group">
                                <strong>PhilHealth</strong>
                                <input type="text" name="philhealth" value="{{$geninfo->philhealth}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-5 px-7 pt-2">
                            <div class="form-group">
                                <strong>S.S.S.</strong>
                                <input type="text" name="sss" value="{{$geninfo->sss}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-5 px-7 pt-2">
                            <div class="form-group">
                                <strong>TIN</strong>
                                <input type="text" name="tin" value="{{$geninfo->tin}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-5 px-7 pt-2">
                            <div class="form-group">
                                <strong>Mobile number</strong>
                                <input type="text" name="cp_number" value="{{$geninfo->cp_number}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-5 px-7 pt-2">
                            <div class="form-group">
                                <strong>Telephone number</strong>
                                <input type="text" name="tel_number" value="{{$geninfo->tel_number}}" class="form-control">
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
