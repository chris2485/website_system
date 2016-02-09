@extends('welcome')


@section('content')

 <h1>Blogs</h1>



 <a href="http://localhost/website_system/public/blog/create"><h2>Create an article</h2></a>


@if(!$blogs)
        <h1>No blogs</h1>

    @else
        @foreach( $blogs as $blog)

             <h2> {{ $blog->title }} </h2> <br/>
            <div style="height: 150px; width: 150px; border: solid;"><img src="" alt="Fucking Photo"/></div>


           <p>{{ str_limit($blog->content, 50) }}... <a href="{!! action('BlogsController@read', $blog->id) !!}"> Read more</a> </p>


        @endforeach
    @endif


@endsection