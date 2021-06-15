@extends('layouts.app')
@include('inc.navbar')
@section('content')
@if (count($errors) > 0)
    <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
     </ul>
    </div>
   @endif

<form action="{{Route('check.login')}}" method="POST">
    {{ csrf_field() }}
    
   <label for="email"><label> Email </br>
        <input type="email" name="email" cols="40" rows="5"></br>
    <label for="password"><label>  Password </br>
            <input type="password" id="password" name="password" ></br>
    <input type='submit'>    
    
</form>     
@endsection