<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Posts Index</title>
  </head>
  <body>
    @include( 'nav' )
    <h1> My Posts </h1>
    <ul>
      @foreach ($posts as $post )
        <li>
          <h3>{{ $post->title }}</h3>
          <p>
            {{ substr( $post->content, 0, 56 )}}
          </p>
          <a href="{{ route( 'post.show', $post->id ) }}">
            Read More
          </a>
        </li>


      @endforeach
    </ul>
  </body>
</html>
