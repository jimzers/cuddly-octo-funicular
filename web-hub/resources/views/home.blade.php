@extends('partials.layout')


@section('content')
    <div class="alert alert-success" role="alert">
        yay!
    </div>
    @for($i = 0; $i < 10; $i += 1)
    <h1>Deep has no friends.</h1>

    @endfor

@endsection
