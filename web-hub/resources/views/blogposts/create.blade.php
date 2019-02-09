<body>
<h1>Create a new blog post</h1>
<form method="POST" action="/blogposts">
    {{ csrf_field() }}
    <div>
        <input type="text" name="title" placeholder="Blog Post title" value="{{old('title')}}">
    </div>

    <div>
        <input type="text" name="author" placeholder="author here" value="{{old('author')}}">
    </div>

    <!-- TODO: make this a select menu of all possible topics -->
    <div>
        <input type="text" name="topic" placeholder="topic here" value="{{old('topic')}}">
    </div>

    <div>
        <textarea name="content" placeholder="content here">{{old('content')}}</textarea>
    </div>




    <div>
        <button type="submit">Create Blog Post</button>
    </div>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</form>

</body>
