<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
    
    </head>
    <body class="antialiased">
      <h1 class="title">title</h1>
      <div class="posts">
          <div class="post">
              <h2>Title</h2>
              <p>This is a sample body.</p>
              @foreach($posts as $post)
                <h2>{{$post->title}}</h2>
                <P>{{$post->body}}</P>
              @endforeach
          </div>
      </div>
    </body>
</html>
