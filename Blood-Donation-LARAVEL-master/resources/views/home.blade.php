@include('inc.navbar')
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                @section('content')
                <h6>Welcome to your profile</h6>
    

@if (Auth::check())
{{ Auth::user()->name }}<span class="caret"></span>

@yield ('update_content')

    @endif


           

                <p align="center"><img src="https://svgshare.com/i/Nfh.svg" width="25%" height="25%"> </p>
        
    </center></br></br>
        @endsection
            </div>
        </div>
    </div>
</div>
@endsection
