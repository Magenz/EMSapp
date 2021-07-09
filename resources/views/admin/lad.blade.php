
<div class="container">
    @include('inc/messages')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-dark">Learning and Development</div>

                <div class="card-body">
                   
                    <div class="table-responsive">

                    <table class="table table-striped">
                        <thead class="thead-light">
                        <tr>
                            <th>Title of Seminar or Training</th>
                            <th>Hours</th>
                            <th>From <small>(mm/dd/yyyy)</small></th>
                            <th>To <small>(mm/dd/yyyy)</small></th>
                      
                        </tr>
                        </thead>
                       @if (count($lad)>0)
                       <h3>Your Learning And Development</h3>
                            @foreach ($lad as $p)
                            <tr class="text-dark">
                                <td>{{$p->title}}</td>
                                <td>{{$p->hours}}</td>
                                <td>{{$p->dateFrom}}</td>
                                <td>{{$p->dateTo}}</td>
                                                         
                               
                            </tr>   
                            @endforeach
                            {{$lad->links()}}
                          @else
                        <h5 class="text-dark">No Record Found.</h5>
                        @endif  
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

