@extends('layouts.app')

@section('content')
<div class="container">
    @include('inc/messages')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('General Information') }}</div>

                <div class="card-body">
                   @if (is_null($personal_information))
               {{-- create will show --}}
               @include('geninfo.create')
                   @else
               {{-- profile will show --}}
               {{$personal_information}}
                   @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
