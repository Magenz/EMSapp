@extends('layouts.app')

@section('content')
<div class="container">
    @include('inc/messages')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-dark">Eligibility</div>

                <div class="card-body">
                    {{-- create eligibility--}}
                    <a href="/eligibility/create">
                        <button class="btn btn-success mb-2"> 
                        <div class="d-flex">
                            <div>
                                <i class="fas fa-plus-circle mr-2"></i>
                            </div>
                            <div>
                                Add Eligibility
                            </div>
                        </div>
                        </button>
                    </a> 
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
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                       @if (count($eligibility)>0)
                       <h3>Your eligibility</h3>
                            @foreach ($eligibility as $p)
                            <tr class="text-dark">
                                <td>{{$p->eligibility_name}}</td>
                                <td>{{$p->rating}}</td>
                                <td>{{$p->exam_date}}</td>
                                <td>{{$p->exam_place}}</td>
                                <td>{{$p->license_number}}</td>
                                <td>{{$p->license_date_validity}}</td>
                             
                                {{-- Start of two buttons --}}
                                <td><a href="/eligibility/{{$p->id}}/edit">
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
                                    <form action="{{ route('eligibility.destroy', $p->id) }}" method="POST">
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
@endsection
