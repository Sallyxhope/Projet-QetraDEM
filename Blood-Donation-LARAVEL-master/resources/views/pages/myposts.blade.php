
@extends('layouts.app')

@include('inc.navbar')

@section('content')

 @if (count($posts)>0)
    <div class="container"> <h2> My Posts </h2> </div>

    @foreach($posts as $post)
             <div class="container">
                 <?php 
                    $id=$post->id;
                    print $id?>
                    <a href="posts/{{$post->p_id}}"> <h1>{{$post->title}}</h1></a>
                    <h3>{{$post->description}}</h3>
                    <h5>{{$post->city}} || {{$post->blood_volume}} || {{$post->blood_type_needed}} || {{$post->phone}}</h5>
                     </br>
            </div>
        
    @endforeach
@endif
 @endsection