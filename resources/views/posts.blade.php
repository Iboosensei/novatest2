<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .m-b-md {
                display: block;
                margin-bottom: 60px;
            }
        </style>
    </head>
    <body>
        <div>
            @foreach($posts as $post)
                <a href="/posts/{{$post->id}}" class="m-b-md">
                    <h1>{{$post->title}}</h1>
                    <h3>{{$post->subtitle}}</h3>
                    <h4>{{$post->published_on}}</h4>
                </a>
            @endforeach
        </div>
    </body>
</html>