@extends('layouts.app')

@section('content')
<div class="container">
    @include('inc/messages')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('work experience') }}</div>

                <div class="card-body">
                    {{-- create workexp--}}
                    <a href="/workexp/create">
                        <button class="btn btn-primary mb-2"> Add Work Experience</button>
                    </a> 
                    <table class="table table-striped">
                        <thead class="thead-light">
                        <tr>
                            <th>From</th>
                            <th>To</th>
                            <th>Position</th>
                            <th>Department</th>
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
                            <tr>
                                <td>{{$p->dateFrom}}</td>
                                <td>{{$p->dateTo}}</td>
                                <td>{{$p->positionTitle}}</td>
                                <td>{{$p->department}}</td>
                                <td>{{$p->monthlySalary}}</td>
                                <td>{{$p->salaryGrade}}</td>
                                <td>{{$p->appointmentStatus}}</td>
                                <td>{{$p->govService}}</td>
                                
                                <td><a href="/workexp/{{$p->id}}/edit"><button class="btn btn-secondary">Edit</button> </a></td>
                                <td>
                                    <form action="{{ route('workexp.destroy', $p->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" title="delete" class="btn btn-danger">
                                        Delete
                                        </button>
                                    </form>    
                                </td>
                            </tr>   
                            @endforeach
                        
                          @else
                                    <h5>You have no workexp</h5>
                        @endif  
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
