@extends('partials.layout')

@section('content')
    <br>
    <br>
    <br>
    @foreach($blogposts as $blogpost)
        <div>
            <h1 style="color: orange;">{{ $blogpost->title }}</h1>
            <!-- TODO: make it so there is a preview of the article, but not the whole thing -->
            <!-- TODO: style this stuff -->
            <p>
                Author: {{ $blogpost->author }}
                <br>
                Likes: {{ $blogpost->likes }}
                <br>
                Topic: {{ $blogpost->topic }}
            </p>
            <a href="/blogposts/{{ $blogpost->id }}">View article</a>
        </div>
        <br>

    @endforeach

@endsection
