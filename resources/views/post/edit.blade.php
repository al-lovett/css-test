<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create!</title>
  </head>
  <body>
    @include('nav')
    <form method="POST" action="{{ route( 'post.update', $post->id) }}">
      @csrf
      <label for="title">
        Title
        <input type="text" name="title" value="{{ old( 'title')}}" placeholder="Ener the Title for this blog...">
      </label>
      <label for="content">
        Content
        <textarea name="content" value="{{ old('content' )}}" placeholder="Enter the content for this blog post...">
        </textarea>
      </label>
      <input type="submit" name="Update Post">
    </form>
  </body>
</html>
