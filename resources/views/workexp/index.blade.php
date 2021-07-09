@extends('layouts.app')

@section('content')
<div class="container">
    @include('inc/messages')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-dark">Work Experience</div>

                <div class="card-body">
                    {{-- create workexp--}}
                    <a href="/workexp/create">
                        <button class="btn btn-success mb-2"> 
                            <div class="d-flex">
                                <div>
                                    <i class="fas fa-plus-circle mr-2"></i>
                                </div>
                                <div>
                                    Add Work Experience
                                </div>
                            </div>
                            </button>
                    </a> 
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
                            <th></th>
                            <th></th>
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
                                
                                {{-- Start of two buttons --}}
                                <td><a href="/workexp/{{$p->id}}/edit">
                                    <button class="btn btn-secondary">
                                            <div class="d-flex">
                                            <div>
                                                <i class="fa fa-edit"></i>
                                            </div>
                                            <div class="ml-2">
                                                Edit  
                                            </div>
                                            </div>     
                                    </button> 
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('workexp.destroy', $p->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" title="delete" class="btn btn-danger">
                                         <div class="d-flex">
                                            <div>
                                                <i class="fa fa-trash"></i>
                                            </div>
                                            <div class="ml-2">
                                                Del
                                            </div>
                                            </div>     
                                        </button>
                                    </form>    
                                </td>
                                {{-- end of two buttons --}}
                            </tr>   
                            @endforeach
                            {{$workexperience->links()}}
                          @else
                                    <h5>You have no workexp</h5>
                        @endif  
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
