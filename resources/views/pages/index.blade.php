<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>

    <link rel="stylesheet" href="/css/admin_custom.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NIA - CRPIP</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body class="bg-white d-flex flex-column">
  <div>
    <nav class="navbar border p-3 mb-2 " style="background: rgb(255,255,255);
    background: linear-gradient(90deg, rgba(255,255,255,1) 53%, rgba(193,236,212,1) 69%, rgba(158,225,188,1) 82%, rgba(144,221,178,1) 87%, rgba(103,208,149,1) 94%, rgba(36,188,103,1) 100%);">
     <div class="d-flex align-items-center">
   
      <img src="/img/ui/NIA-LOGO-Circle.png" class="rounded float-left" alt="...">
      <div class="ml-2">
        <h2 class="text-green"> <b> National Irrigation Administration </b></h2>
        <h4 class="text-green"> <b> Chico River Pump Irrigation Project</b></h4>
      </div>

    </div>
   
    
    </nav>
  </div>
  {{-- end Nav --}}


    <div class="container d-flex flex-wrap justify-content-center" >
      <div class="col-lg-12 justify-content-center d-flex bg-green p-2 elevation-2 m-2 ">NIA - CRPIP Portal</div>
         
      <a href="/dashboard" class="btn bg-light d-flex flex-column card p-3 col-md-5 mx-1">
        <div>
          <h1 class="text-green">Public News</h1>
        </div>
        <hr>
        <div class="text-info">
          <h5>Latest News about Chico River Pump Irrigation Project</h5>
        </div>
      </a>  

          <a href="/dashboard" class="btn bg-light d-flex flex-column card p-3 col-md-5 mx-1">
              <div>
                <h1 class="text-green">Employee Management System</h1>
              </div>
              <hr>
              <div class="text-info">
                <h5>Online Management App for CRPIP Employees.</h5>
              </div>
            </a>  
            
            <a href="/dashboard" class="btn bg-light d-flex flex-column card p-3 col-md-5 mx-1">
              <div>
                <h1 class="text-green">Bid Posting</h1>
              </div>
              <hr>
              <div class="text-info">
                <h5>News about CRPIP's Bids.</h5>
              </div>
            </a>  
        </div>

{{-- footer --}}
      <div class="mt-auto bg-green ">
        <div class="d-flex justify-content-center p-2 flex-column">
         
          <div class="mx-auto">
            <strong>
              <h5>
                Copyright © 2021 Chico River Pump Irrigation Project, Palca, Tuao East, Cagayan. All rights resserved.
              </h5>  
            </strong>
          </div>
          <div class="mx-auto">
            Contact us: crpip@nia.gov.ph | crpip.pmo@gmail.com
          </div>       
        </div>
      </div>


  </body>



</html>