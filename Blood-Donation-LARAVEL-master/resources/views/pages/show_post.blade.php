@extends('layouts.app')
@include('inc.navbar')
@section('content')
<div class="container">


    <h1>{{$post[0]->title}}</h1>
    <h3>{{$post[0]->description}}</h3>
    <h5>{{$post[0]->city}} || {{$post[0]->blood_volume}} || {{$post[0]->blood_type_needed}} || {{$post[0]->phone}}</h5>
    </div>

<!-- Each user should only edit and delete his posts-->
    @if (auth()->user()->id === $post[0]['user_id'])  

    <a class="btn btn-default" href="/posts/{{$post[0]->p_id}}/edit" >Edit Post</a>
    <form action="{!! route('destroy',$id=$post[0]->p_id) !!}" method="Post">
        @csrf

    <input name="_method" type="hidden" value="DELETE">
    <label for="Delete"><label>  
    <input type="submit" value="Delete Post">     
    </form>

@endif 
<!-- END Each user should only edit and delete his posts-->

    {{-- <a> class="btn btn-default" href="/posts/{{$post[0]->p_id}}/delete" >Delete Post</a> --}}

@endsection



