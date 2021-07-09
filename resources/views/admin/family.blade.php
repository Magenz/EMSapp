
    @if ($family)
        
 
        <div class="card col-md-3 bg-light m-1 p-2">
            <h5 class="mt-3">
                <p class="text-dark"><strong>Spouse Information</strong></p>
            </h5>
                 <div class='border-top'></div> 
            <div>
                <h5>
                   <h5 class="text-secondary">Surname:</h5>
                   <h5>{{$family->spouse_surname}}</h5>
                </h5>
                 <div class='border-top'></div>
                <h5>
                    <h5 class="text-secondary">First Name:</h5>
                    <h5>{{$family->spouse_firstname}}</h5>
                 </h5>
                  <div class='border-top'></div>
                 <h5>
                    <h5 class="text-secondary">Middle Name:</h5>
                    <h5>{{$family->spouse_middlename}}</h5>
                 </h5>
                  <div class='border-top'></div>
                 <h5>
                    <h5 class="text-secondary">Name Extention:</h5>
                    <h5>{{$family->spouse_name_ext}}</h5>
                 </h5>
                  <div class='border-top'></div>
                 <h5>
                    <h5 class="text-secondary">Occupation:</h5>
                    <h5>{{$family->spouse_occupation}}</h5>
                 </h5>
                  <div class='border-top'></div>
                 <h5>
                    <h5 class="text-secondary">Employer / Business:</h5>
                    <h5>{{$family->spouse_employer_business}}</h5>
                 </h5>
                  <div class='border-top'></div>
                 <h5>
                    <h5 class="text-secondary">Employment / Business Address:</h5>
                    <h5>{{$family->spouse_business_address}}</h5>
                 </h5>
                  <div class='border-top'></div>
                 <h5>
                    <h5 class="text-secondary">Contact Number:</h5>
                    <h5>{{$family->spouse_tel_number}}</h5>
                 </h5>
                  <div class='border-top'></div>

            </div>
        </div>          
  

<div class="card col-md-3 bg-light m-1 p-3">
    <h5 class="mt-3">
        <p class="text-dark"><strong>Father's Information</strong></p>
    </h5>
         <div class='border-top'></div> 
    <div>
        <h5>
            <h5 class="text-secondary">Surname:</h5>
            <h5>{{$family->father_surname}}</h5>
         </h5>
          <div class='border-top'></div>
         <h5>
            <h5 class="text-secondary">First Name:</h5>
            <h5>{{$family->father_firstname}}</h5>
         </h5>
          <div class='border-top'></div>
         <h5>
            <h5 class="text-secondary">Middle Name:</h5>
            <h5>{{$family->father_middlename}}</h5>
         </h5>
          <div class='border-top'></div>
         <h5>
            <h5 class="text-secondary">Name Extention:</h5>
            <h5>{{$family->father_name_ext}}</h5>
         </h5>
          <div class='border-top'></div>
    </div>
</div>          

<div class="card col-md-3 bg-light m-1 p-3">
    <h5 class="mt-3">
        <p class="text-dark"><strong>Mother's Information</strong></p>
    </h5>
         <div class='border-top'></div> 
    <div>
        <h5>
            <h5 class="text-secondary">Maiden Name:</h5>
            <h5>{{$family->mother_maiden_name}}</h5>
         </h5>
          <div class='border-top'></div>
         <h5>
            <h5 class="text-secondary">Surname:</h5>
            <h5>{{$family->mother_surname}}</h5>
         </h5>
          <div class='border-top'></div>
         <h5>
            <h5 class="text-secondary">First Name:</h5>
            <h5>{{$family->mother_firstname}}</h5>
         </h5>
          <div class='border-top'></div>
         <h5>
            <h5 class="text-secondary">Middle Name:</h5>
            <h5>{{$family->mother_middlename}}</h5>
         </h5>
          <div class='border-top'></div>
         
    </div>
</div>     

@else
    <h5>No record Found</h5>
@endif
