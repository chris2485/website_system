@extends('welcome')


@section('content')

    <h1 xmlns="http://www.w3.org/1999/html">Create</h1>

    <form method="POST">
        {{ $blog->content }}
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        Title <input type="text" name="title" value="{{ $blog->title }}"/>
        Content <textarea rows="10" cols="50" name="body"> {{ $blog->content }}</textarea>

        <input type="submit" value="submit"/>

    </form>






@endsection