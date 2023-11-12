<html>

<head>
    <title>Cool Blog Homepage</title>
    <link rel="stylesheet" href="/main.css">
</head>

<body>
    <h1>Welcome to the homepage of the Cool Blog!</h1>
    <a href="{{ url('/about') }}">About</a>

    <div>
        <p>Today is {{ date('j F Y') }}.</p>

        <h2>Blog posts:</h2>
        @foreach($posts as $post)
        <a href="/blog/{{$post->id}}">
            <p>{{ucwords($post->title)}}</p>
        </a>
        @endforeach


    </div>
</body>

</html>