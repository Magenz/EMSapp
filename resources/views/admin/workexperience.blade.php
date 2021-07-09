
<div class="container">
    @include('inc/messages')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-dark">Work Experience</div>

                <div class="card-body">
                   
                    <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="thead-light">
                        <tr>
                            <th>From</th>
                            <th>To</th>
                            <th>Position</th>
                            <th>Company/Department</th>
                            <th>Salary</th>
                            <th>Salary Grade</th>
                            <th>Appointment Status</th>
                            <th>Government Service</th>
     
                        </tr>
                        </thead>
                       @if (count($workexperience)>0)
                       <h3>Your workexperience</h3>
                            @foreach ($workexperience as $p)
                            <tr class="text-dark">
                                <td>{{$p->dateFrom}}</td>
                                <td>{{$p->dateTo}}</td>
                                <td>{{$p->positionTitle}}</td>
                                <td>{{$p->department}}</td>
                                <td>{{$p->monthlySalary}}</td>
                                <td>{{$p->salaryGrade}}</td>
                                <td>{{$p->appointmentStatus}}</td>
                                <td>{{$p->govService}}</td>
                                
                            </tr>   
                            @endforeach
                            {{$workexperience->links()}}
                          @else
                                    <h5>No Record Found.</h5>
                        @endif  
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

