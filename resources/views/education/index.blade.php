@extends('layouts.app')

@section('content')
<div class="container">
    @include('inc/messages')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-dark">Education</div>

                <div class="card-body">
                            {{-- create education--}}
                            <a href="/education/create">
                                <button class="btn btn-success mb-2"> 
                                <div class="d-flex">
                                    <div>
                                        <i class="fas fa-plus-circle mr-2"></i>
                                    </div>
                                    <div>
                                        Add Education
                                    </div>
                                </div>
                                </button>
                            </a> 
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
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                       @if (count($education)>0)
                       <h3>Your education</h3>
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
                             
                                {{-- Start of two buttons --}}
                                <td><a href="/education/{{$p->id}}/edit">
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
                                    <form action="{{ route('education.destroy', $p->id) }}" method="POST">
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
                            {{$education->links()}}
                          @else
                                    <h5>You have no Education</h5>
                        @endif  
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
