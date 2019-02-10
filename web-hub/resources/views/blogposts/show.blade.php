
@extends('partials.layout')


@section('content')

    <!-- TODO: this should be a page where you can see the article. think of it like new york times or something.
    make it look fancy -->
    <link rel="stylesheet" type="text/css" href="/web-hub/public/css/app.css">
    <link rel="stylesheet" type="text/css" href="/styles.css">



    <h1 class="title">{{ $blogpost->title }}</h1>
    <p class="author"> {{$blogpost->author}}</p>

    <hr/>

    <p class="text"> {{ $blogpost->content}}</p> 
    <p> Likes: {{ $blogpost-> likes}} </p>
    <a href="/blogposts/{{$blogpost->id}}/edit">Edit Article </a>



@endsection
