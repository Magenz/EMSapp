@extends('layouts.app')

@section('content')
<div class="container">
    @include('inc/messages')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-dark">Voluntary Work</div>

                <div class="card-body">
                    {{-- create voluntarywork--}}
                    <a href="/voluntarywork/create">
                        <button class="btn btn-success mb-2"> 
                        <div class="d-flex">
                            <div>
                                <i class="fas fa-plus-circle mr-2"></i>
                            </div>
                            <div>
                                Add Voluntary Work
                            </div>
                        </div>
                        </button>
                    </a> 
                    <div class="table-responsive">

                    <table class="table table-striped">
                        <thead class="thead-light">
                        <tr>
                            <th>Work Position</th>
                            <th>Organization / Company / Program</th>
                            <th>Address</th>
                            <th>From</th>
                            <th>To</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                       @if (count($voluntarywork)>0)
                       <h3>Your voluntarywork</h3>
                            @foreach ($voluntarywork as $p)
                            <tr class="text-dark">
                                <td>{{$p->workPosition}}</td>
                                <td>{{$p->workPlace}}</td>
                                <td>{{$p->workAddress}}</td>
                                <td>{{$p->dateFrom}}</td>
                                <td>{{$p->dateTo}}</td>
                               
                                {{-- Start of two buttons --}}
                                <td><a href="/voluntarywork/{{$p->id}}/edit">
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
                                    <form action="{{ route('voluntarywork.destroy', $p->id) }}" method="POST">
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
                            {{$voluntarywork->links()}}
                          @else
                            <h5 class='text-dark'>You have no Voluntary Work</h5>
                        @endif  
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
