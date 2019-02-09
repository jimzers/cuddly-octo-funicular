@extends('layout')

@section('content')
    <h1 class="title">Edit Blog Post</h1>

    <form method="POST" action="/blogposts/{{ $blogpost->id }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="control">
                <input type="text" class="input" name="title" placeholder="Title" value="{{ $blogpost->title }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="author">Author</label>

            <div class="control">
                <input type="text" class="input" name="author" placeholder="Author" value="{{ $blogpost->author }}">
            </div>
        </div>


        <div class="field">
            <label class="label" for="topic">Topic</label>

            <div class="control">
                <input type="text" class="input" name="topic" placeholder="Topic" value="{{ $blogpost->topic }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="content">Content</label>

            <div class="control">
                <textarea class="textarea" name="content">{{ $blogpost->content }}</textarea>
            </div>
        </div>

        <div class="field">

            <div class="control">
                <button type="submit" class="button is-link">Update Blog Post</button>
            </div>
        </div>
    </form>
    <form method="POST" action="/blogposts/{{ $blogpost->id }}">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <div class="field">

            <div class="control">
                <button type="submit">Delete Blog Post</button>
            </div>
        </div>
    </form>

@endsection
