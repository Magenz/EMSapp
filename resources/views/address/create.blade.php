@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Address') }}</div>

<div class="card-body">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            
            <div class="">
                <a class="btn btn-primary" href="{{ route('address.index') }}" title="Go back"> <i class="fas fa-backward "><< Back</i> </a>
            </div>
    </div>
</div>



   @include('inc/messages')

    <div class="w-2/3 mx-auto">
        <div class="bg-white shadow-md rounded my-6">
                <form action="{{route('address.store')}}" method="POST">
                    @csrf  
                    <div class="row">
                       {{-- textfields --}}
                       <h3 class="mt-3">Current Address</h3>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>House Block</strong>
                                <input type="text" name="res_hbl" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Street</strong>
                                <input type="text" name="res_street" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Subdivision/Village / Title</strong>
                                <input type="text" name="res_subvil" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Barangay</strong>
                                <input type="text" name="res_barangay" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>City</strong>
                                <input type="text" name="res_city" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Province</strong>
                                <input type="text" name="res_province" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Zip Code</strong>
                                <input type="text" name="res_zipcode" class="form-control">
                            </div>
                        </div>
                        <h3>Permanent Address</h3>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>House Block</strong>
                                <input type="text" name="perm_hbl" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Street</strong>
                                <input type="text" name="perm_street" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Subdivision/Village</strong>
                                <input type="text" name="perm_subvil" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Barangay</strong>
                                <input type="text" name="perm_barangay" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Blood Type</strong>
                                <input type="text" name="perm_city" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Province</strong>
                                <input type="text" name="perm_province" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                            <div class="form-group">
                                <strong>Zipcode</strong>
                                <input type="text" name="perm_zipcode" class="form-control">
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
