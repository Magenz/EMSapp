@extends('layouts.app')

@section('content')
<div class="container">
    @include('inc/messages')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-dark">Children</div>

                <div class="card-body">
                    {{-- create children--}}
                    <a href="/children/create">
                        <button class="btn btn-success mb-2"> 
                        <div class="d-flex">
                            <div>
                                <i class="fas fa-plus-circle mr-2"></i>
                            </div>
                            <div>
                                Add Children
                            </div>
                        </div>
                        </button>
                    </a> 
                    <div class="table-responsive">

                    <table class="table table-striped">
                        <thead class="thead-light">
                        <tr>
                            <th>Child Name</th>
                            <th>Birth Date</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                       @if (count($children)>0)
                       <h3>Your children</h3>
                            @foreach ($children as $p)
                            <tr class="text-dark">
                                <td>{{$p->childName}}</td>
                                <td>{{$p->birthDate}}</td>

                                {{-- Start of two buttons --}}
                                <td><a href="/children/{{$p->id}}/edit">
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
                                    <form action="{{ route('children.destroy', $p->id) }}" method="POST">
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
                            {{$children->links()}}
                          @else
                            <h5 class='text-dark'>You have no Children</h5>
                        @endif  
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
