@extends('layouts.secondary')

@section('content')
<div class="container d-flex flex-wrap justify-content-center" >
  
  <div class="col-lg-12 justify-content-center d-flex bg-green p-2 elevation-2 m-2 ">
    NIA - CRPIP Portal
  </div>

  <a href="/dashboard" class="btn bg-light d-flex flex-column card p-3 col-md-5 mx-1">
    <div>
      <h3 class="text-green">Employee Management System</h3>
    </div>
      <hr>
    <div class="text-info">
        <h5>Online Management App for CRPIP Employees.</h5>
    </div>
  </a>  

  <a href="/bids" class="btn bg-light d-flex flex-column card p-3 col-md-5 mx-1">
    <div>
      <h3 class="text-green">Bid Posting</h3>
    </div>
      <hr>
    <div class="text-info">
      <h5>News about CRPIP's Bids.</h5>
    </div>
  </a>  

  <a href="/news" class="btn bg-light d-flex flex-column card p-3 col-md-5 mx-1">
    <div>
      <h3 class="text-green">Public News</h3>
    </div>
      <hr>
    <div class="text-info">
      <h5>Latest News about Chico River Pump Irrigation Project</h5>
    </div>
  </a>  
  
</div>


@endsection