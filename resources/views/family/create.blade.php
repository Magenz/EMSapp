@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-dark">Family Background</div>

<div class="card-body">
    <div class="row">
        <div class="col-lg-12 margin-tb">
          
            <div class="">
                <a class="btn btn-success" href="{{ route('family.index') }}" title="Go back"> <i class="fas fa-backward "> Back</i> </a>
            </div>
    </div>
</div>



   @include('inc/messages')

    <div class="w-2/3 mx-auto">
        <div class="bg-white shadow-md rounded my-6">
                <form action="{{route('family.store')}}" method="POST">
                    @csrf  
                    <div class="d-flex flex-wrap justify-content-center">
                       {{-- textfields --}}

                        <div class="col-md-12 mt-3">
                            <h2>Spouse Details</h2>                        
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <strong>Surname</strong>
                                <input type="text" name="spouse_surname" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <strong>First name</strong>
                                <input type="text" name="spouse_firstname" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <strong>Middle Name / Title</strong>
                                <input type="text" name="spouse_middlename" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <strong>Name Extention (Jr/Sr)</strong>
                                <input type="text" name="spouse_name_ext" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <strong>Occupation</strong>
                                <input type="text" name="spouse_occupation" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <strong>Emplpoyer / Business</strong>
                                <input type="text" name="spouse_employer_business" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <strong>Employment / Business Address</strong>
                                <input type="text" name="spouse_business_address" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <strong>TEL / CP Number</strong>
                                <input type="text" name="spouse_tel_number" class="form-control">
                            </div>
                        </div>


                        <div class="col-md-12">
                            <h2>Father Details</h2>                        
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <strong>Surname</strong>
                                <input type="text" name="father_surname" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <strong>First Name</strong>
                                <input type="text" name="father_firstname" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <strong>Middle Name</strong>
                                <input type="text" name="father_middlename" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <strong>Name Extention (Jr/Sr)</strong>
                                <input type="text" name="father_name_ext" class="form-control">
                            </div>
                        </div>


                        <div class="col-md-12">
                            <h2>Mother Details</h2>                        
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <strong>Maiden Name</strong>
                                <input type="text" name="mother_maiden_name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <strong>Surname</strong>
                                <input type="text" name="mother_surname" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <strong>First Name</strong>
                                <input type="text" name="mother_firstname" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <strong>Middle Name</strong>
                                <input type="text" name="mother_middlename" class="form-control">
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
