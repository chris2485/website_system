@extends('welcome')


@section('content')

    <a href="http://localhost/website_system/public/"><h1>Blogs</h1></a>


    <h2> {{ $blog->title }} </h2>  <br/>
    <div style="height: 150px; width: 150px; border: solid;"><img src="" alt="Fucking Photo"/></div>
    <p>{{ $blog->content }}


        <a href="http://localhost/website_system/public/blog/edit/{{$blog->id}}">Edit</a>
        <a href="http://localhost/website_system/public/{{$blog->id}}">Delete</a>



@endsection