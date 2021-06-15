@extends('layouts.app')
@include('inc.navbar')
@section('content')

<form action="{{Route('user.submit')}}" method="POST">
    {{ csrf_field() }}
    
    <label for="user_name"><label>  User Name </br>
        <input type="text" id="user_name" name="user_name"></br>
    
        <label for="email"><label> Email </br>
        <input type="email" name="email" cols="40" rows="5"></br>
    
        <label for="phone"><label> Phone </br>
        <input type="number" id="phone" name="phone"></br>

    <label for="password"><label> Password </br>
        <input type="password" id="city" name="password"></br>

    <label for="blood_type"><label> Blood Type  </br>
        <input type="text" id="blood_type" name="blood_type"></br>

    <label for="city"><label> City  </br>
        <input type="text" id="city" name="city"></br>
    <label for="gender"><label> Gender  </br>
        <input type="radio" id="city" name="gender" value="male"> Male
        <input type="radio" id="city" name="gender" value="female"> Female </br>
    <label for="birth_date"><label> Birth day
        <input type="date" id="birth_date" name="birth_date">    
    </br>


    <input type="submit">
</form>

@endsection

