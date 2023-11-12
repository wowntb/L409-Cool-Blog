<html>

<head>
    <title>Cool Blogs</title>
    <link rel="stylesheet" href="/main.css">
</head>

<body>
    <h1>Cool Blog </h1>

    <div>
        <a href="{{ url('/about') }}">About</a>

        <!-- First the ID of the blog is displayed by an H2 tag. -->
        <!-- $post is indexed at 0 to get the first (and only) row in the table. -->
        <h2>Blog {{$post[0]->id }}</h2>
        <!-- ucwords() is used to display the title of the blog in title case. -->
        <h3>{{ucwords($post[0]->title)}}</h3>
        <!-- The content of the blog is displayed by a P tag. -->
        <p>{{$post[0]->content}}</p>
        <!-- At the bottom the date of the blog post will be displayed. -->
        <h4>Posted on {{$post[0]->created}}</h4>
    </div>
</body>

</html>