
<div class="container">
    @include('inc/messages')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-dark">Eligibility</div>

                <div class="card-body">
                    {{-- create eligibility--}}
                    
                    <div class="table-responsive">

                    <table class="table table-striped">
                        <thead class="thead-light">
                        <tr>
                            <th>Eligibility</th>
                            <th>Rating</th>
                            <th>Date Taken</th>
                            <th>Place of Examination</th>
                            <th>License Number</th>
                            <th>License Validity</th>
                        
                        </tr>
                        </thead>
                       @if (count($eligibility)>0)
                   
                            @foreach ($eligibility as $p)
                            <tr class="text-dark">
                                <td>{{$p->eligibility_name}}</td>
                                <td>{{$p->rating}}</td>
                                <td>{{$p->exam_date}}</td>
                                <td>{{$p->exam_place}}</td>
                                <td>{{$p->license_number}}</td>
                                <td>{{$p->license_date_validity}}</td>
                             
                                
                            </tr>   
                            @endforeach
                            {{$eligibility->links()}}
                          @else
                            <h5 class='text-dark'>You have no Eligibility</h5>
                        @endif  
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

