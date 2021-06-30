@extends('layouts.app')

@section('content')
<div class="container">
    @include('inc/messages')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-dark">Learning and Development</div>

                <div class="card-body">
                    {{-- create learninganddevelopment--}}
                    <a href="/learninganddevelopment/create">
                        <button class="btn btn-success mb-2"> 
                        <div class="d-flex">
                            <div>
                                <i class="fas fa-plus-circle mr-2"></i>
                            </div>
                            <div>
                                Add Learning and Development
                            </div>
                        </div>
                        </button>
                    </a> 
                    <div class="table-responsive">

                    <table class="table table-striped">
                        <thead class="thead-light">
                        <tr>
                            <th>Title of Seminar or Training</th>
                            <th>Hours</th>
                            <th>From <small>(mm/dd/yyyy)</small></th>
                            <th>To <small>(mm/dd/yyyy)</small></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                       @if (count($learninganddevelopment)>0)
                       <h3>Your Learning And Development</h3>
                            @foreach ($learninganddevelopment as $p)
                            <tr class="text-dark">
                                <td>{{$p->title}}</td>
                                <td>{{$p->hours}}</td>
                                <td>{{$p->dateFrom}}</td>
                                <td>{{$p->dateTo}}</td>
                                                         
                                {{-- Start of two buttons --}}
                                <td><a href="/learninganddevelopment/{{$p->id}}/edit">
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
                                    <form action="{{ route('learninganddevelopment.destroy', $p->id) }}" method="POST">
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
                            {{$learninganddevelopment->links()}}
                          @else
                        <h5 class="text-dark">You have no Learning and Development</h5>
                        @endif  
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
