    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Adress') }}</div>

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
                    <form action="{{route('address.update', $address->id)}}" method="POST">
                        @csrf 
                        @method('PUT') 
                        <div class="row">
                        {{-- textfields --}}
                        <h3 class="mt-3">Current Address</h3>
                            <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                                <div class="form-group">
                                    <strong>House Block</strong>
                                    <input type="text" name="res_hbl" value="{{$address->res_hbl}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                                <div class="form-group">
                                    <strong>Street</strong>
                                    <input type="text" name="res_street" value="{{$address->res_street}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                                <div class="form-group">
                                    <strong>Subdivision/Village</strong>
                                    <input type="text" name="res_subvil" value="{{$address->res_subvil}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                                <div class="form-group">
                                    <strong>Barangay</strong>
                                    <input type="text" name="res_barangay" value="{{$address->res_barangay}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                                <div class="form-group">
                                    <strong>City</strong>
                                    <input type="text" name="res_city" value="{{$address->res_city}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                                <div class="form-group">
                                    <strong>Province</strong>
                                    <input type="text" name="res_province" value="{{$address->res_province}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                                <div class="form-group">
                                    <strong>Zip Code</strong>
                                    <input type="text" name="res_zipcode" value="{{$address->res_zipcode}}" class="form-control">
                                </div>
                            </div>
                            <h3>Permanent Address</h3>
                            <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                                <div class="form-group">
                                    <strong>House Block</strong>
                                    <input type="text" name="perm_hbl" value="{{$address->perm_hbl}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                                <div class="form-group">
                                    <strong>Street</strong>
                                    <input type="text" name="perm_street" value="{{$address->perm_street}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                                <div class="form-group">
                                    <strong>Subdivision/Village</strong>
                                    <input type="text" name="perm_subvil" value="{{$address->perm_subvil}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                                <div class="form-group">
                                    <strong>Barangay</strong>
                                    <input type="text" name="perm_barangay" value="{{$address->perm_barangay}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                                <div class="form-group">
                                    <strong>City</strong>
                                    <input type="text" name="perm_city" value="{{$address->perm_city}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                                <div class="form-group">
                                    <strong>Province</strong>
                                    <input type="text" name="perm_province" value="{{$address->perm_province}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 px-7 pt-2">
                                <div class="form-group">
                                    <strong>Zip Code</strong>
                                    <input type="text" name="perm_zipcode" value="{{$address->perm_zipcode}}" class="form-control">
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
