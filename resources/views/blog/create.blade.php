@extends('welcome')


@section('content')

    <h1>Create</h1>

    <form method="POST">

        <input type="hidden" name="_token" value="{!! csrf_token() !!}">

       Title <input type="text" name="title"/>
       Content <input type="text" name="body"/>

        <input type="submit" value="submit"/>

    </form>






@endsection