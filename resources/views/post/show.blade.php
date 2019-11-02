<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Show Post</title>
  </head>
  <body>
    @include( 'nav' )
    <h1>{{ $post->title }}</h1>
    <p>
      {{ $post->content }}
    </p>
    <a href="{{ route ('post.edit', $post->id )}}">
      Edit Post
    </a>
    <form method="POST" action="{{ route( 'post.destroy', $post->id ) }}">
      @csrf
        <input type="submit" name="delete" value="Delete Post">
  </form>
  </body>
</html>
