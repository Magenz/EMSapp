
<div class="container">
    @include('inc/messages')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-dark">Voluntary Work</div>

                <div class="card-body">
                 
                    <div class="table-responsive">

                    <table class="table table-striped">
                        <thead class="thead-light">
                        <tr>
                            <th>Work Position</th>
                            <th>Organization / Company / Program</th>
                            <th>Address</th>
                            <th>From</th>
                            <th>To</th>
                     
                        </tr>
                        </thead>
                       @if (count($voluntarywork)>0)
                      
                            @foreach ($voluntarywork as $p)
                            <tr class="text-dark">
                                <td>{{$p->workPosition}}</td>
                                <td>{{$p->workPlace}}</td>
                                <td>{{$p->workAddress}}</td>
                                <td>{{$p->dateFrom}}</td>
                                <td>{{$p->dateTo}}</td>
                               
                            
                            </tr>   
                            @endforeach
                            {{$voluntarywork->links()}}
                          @else
                            <h5 class='text-dark'>No Record Found</h5>
                        @endif  
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

