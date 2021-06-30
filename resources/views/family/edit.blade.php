@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-dark">Family Information</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                Edit Family Information
                            </div>
                            <div class="">
                                <a class="btn btn-secondary" href="{{ route('family.index') }}" title="Go back"> <i class="fas fa-backward ">  Back</i> </a>
                            </div>
                    </div>
                </div>



   @include('inc/messages')

    <div class="w-2/3 mx-auto">
        <div class="bg-white shadow-md rounded my-6">
                        <form action="{{route('family.update', $family->id)}}" method="POST">
                            @csrf 
                            @method('PUT') 
                            <div class="d-flex flex-wrap justify-content-center">
                            {{-- textfields --}}

                            <div class="col-md-12 px-7 pt-2">
                                <h2>Spouse Details</h2>
                            </div>

                                <div class="col-md-5 px-7 pt-2">
                                    <div class="form-group">
                                        <strong>Surname</strong>
                                        <input type="text" name="spouse_surname" value="{{$family->spouse_surname}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-5 px-7 pt-2">
                                    <div class="form-group">
                                        <strong>First Name</strong>
                                        <input type="text" name="spouse_firstname" value="{{$family->spouse_firstname}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-5 px-7 pt-2">
                                    <div class="form-group">
                                        <strong>Middle Name</strong>
                                        <input type="text" name="spouse_middlename" value="{{$family->spouse_middlename}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-5 px-7 pt-2">
                                    <div class="form-group">
                                        <strong>Name Extention eg. Jr/Sr<small> (leave it blank if not applicable)</small></strong>
                                        <input type="text" name="spouse_name_ext" value="{{$family->spouse_name_ext}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-5 px-7 pt-2">
                                    <div class="form-group">
                                        <strong>Occupation</strong>
                                        <input type="text" name="spouse_occupation" value="{{$family->spouse_occupation}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-5 px-7 pt-2">
                                    <div class="form-group">
                                        <strong>Employer / Business</strong>
                                        <input type="text" name="spouse_employer_business" value="{{$family->spouse_employer_business}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-5 px-7 pt-2">
                                    <div class="form-group">
                                        <strong>Employment / Business Address</strong>
                                        <input type="text" name="spouse_business_address" value="{{$family->spouse_business_address}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-5 px-7 pt-2">
                                    <div class="form-group">
                                        <strong>TEL / CP Number</strong>
                                        <input type="text" name="spouse_tel_number" value="{{$family->spouse_tel_number}}" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-12 px-7 pt-2">
                                    <h2>Father Details</h2>
                                </div>

                                <div class="col-md-5 px-7 pt-2">
                                    <div class="form-group">
                                        <strong>Surname</strong>
                                        <input type="text" name="father_surname" value="{{$family->father_surname}}" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-5 px-7 pt-2">
                                    <div class="form-group">
                                        <strong>First Name</strong>
                                        <input type="text" name="father_firstname" value="{{$family->father_firstname}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-5 px-7 pt-2">
                                    <div class="form-group">
                                        <strong>Middle Name</strong>
                                        <input type="text" name="father_middlename" value="{{$family->father_middlename}}" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-5 px-7 pt-2">
                                    <div class="form-group">
                                        <strong>Name Extention eg: Sr / Jr</strong>
                                        <input type="text" name="father_name_ext" value="{{$family->father_name_ext}}" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-12 px-7 pt-2">
                                    <h2>Mother Details</h2>
                                </div>

                                <div class="col-md-5 px-7 pt-2">
                                    <div class="form-group">
                                        <strong>Maiden Name</strong>
                                        <input type="text" name="mother_maiden_name" value="{{$family->mother_maiden_name}}" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-5 px-7 pt-2">
                                    <div class="form-group">
                                        <strong>Surname</strong>
                                        <input type="text" name="mother_surname" value="{{$family->mother_surname}}" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-5 px-7 pt-2">
                                    <div class="form-group">
                                        <strong>First Name</strong>
                                        <input type="text" name="mother_firstname" value="{{$family->mother_firstname}}" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-5 px-7 pt-2">
                                    <div class="form-group">
                                        <strong>Middle Name</strong>
                                        <input type="text" name="mother_middlename" value="{{$family->mother_middlename}}" class="form-control">
                                    </div>
                                </div>

                            {{-- end of textfields --}}
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center pb-7">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>  
</div>


@endsection
