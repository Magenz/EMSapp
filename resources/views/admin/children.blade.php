
<div class="container">
    @include('inc/messages')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-dark">Children</div>

                <div class="card-body">
                    <div class="table-responsive">
                       @if (count($children)>0)
                       <table class="table table-striped">
                        <thead class="thead-light">
                        <tr>
                            <th>Child Name</th>
                            <th>Birth Date</th>
                        </tr>
                        </thead>
                   
                            @foreach ($children as $p)
                            <tr class="text-dark">
                                <td>{{$p->childName}}</td>
                                <td>{{$p->birthDate}}</td>
                            </tr>   
                            @endforeach
                            {{$children->links()}}
                          @else
                            <h5 class='text-dark'>No record found</h5>
                        @endif  
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

