
<div class="container">
    @include('inc/messages')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-dark">Education</div>

                <div class="card-body">
                            {{-- create education--}}
                            
                    <div class="table-responsive">

                    <table class="table table-striped">
                        <thead class="thead-light">
                        <tr>
                            <th>Level</th>
                            <th>School</th>
                            <th>Degree / Course</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Units Earned</th>
                            <th>Graduate Year</th>
                            <th>Awards / Scholarship</th>
                         
                        </tr>
                        </thead>
                       @if (count($education)>0)
                      
                            @foreach ($education as $p)
                            <tr class="text-dark">
                                <td>{{$p->level}}</td>
                                <td>{{$p->school}}</td>
                                <td>{{$p->degree_course}}</td>
                                <td>{{$p->attendance_from}}</td>
                                <td>{{$p->attendance_to}}</td>
                                <td>{{$p->units_earned}}</td>
                                <td>{{$p->graduate_year}}</td>
                                <td>{{$p->awards_scholarship}}</td>
                             
                               
                            </tr>   
                            @endforeach
                            {{$education->links()}}
                          @else
                                    <h5>No Record Found</h5>
                        @endif  
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

