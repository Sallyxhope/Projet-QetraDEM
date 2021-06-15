@include('inc.navbar')
@extends('layouts.app')
@section('content')
    


</br></br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Post') }}</div>

                <div class="card-body">

                            <form action="{{Route('post.submit')}}" method="POST">
                            @csrf
                      
                            
                            <div class="form-group row">
                                <div class="col-md-6">
                            <label for="title" ><label> Post title 
                                <textarea name="title" cols="95" rows="2" ></textarea></div></div>
                        

                                <div class="form-group row">
                                    <div class="col-md-6">
                                <label for="description"><label> Description
                                    <textarea name="description" cols="95" rows="7"></textarea></div></div>
                            

                                    
                                <div class="form-group row">
                                    <div class="col-md-6">
                                <label for="phone"><label> Phone number :   
                                    <input type="tel" id="phone" name="phone" placeholder="0612345678" pattern="(0)([ \-_/]*)(\d[ \-_/]*){9}">

                                </div></div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                <label for="city"><label> City :  
                                    <input type="text" id="city" name="city" >
                                </div></div>
                            
                                <div class="form-group row">
                                    <div class="col-md-6">
                                <label for="blood_type_needed"><label>Blood Type needed :   
                                    <select name="blood_type_needed" id="blood_type_needed">
                                        <option value="NULL">Choose</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                      </select>
                                </div></div>

                                
                                <div class="form-group row">
                                    <div class="col-md-6">
                                <label for="blood_volume"><label> Blood Volume :    
                                    <input type="number" id="blood_volume" name="blood_volume" >
                                </div></div>
                            
                                <div class="form-group row">
                                    <div class="col-md-6">
                                <label for="submit"><label>  
                                    <input type="submit">
                                </div></div>
            
                    
 
                        
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



{{-- <div class="form-group row">
    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div> --}}



<div class="container">

@endsection