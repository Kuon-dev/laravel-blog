<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- basic passing data #1-->
    <!-- <p>$email</p> // make sure to include double braces -->
    <!-- basic passing data #2 -->
    @foreach ($posts as $post)

    <h1>{{$post->title}}</h1>
    <p>
        {{$post->body}}
    </p>
    @endforeach
</body>
</html>
