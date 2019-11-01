<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create!</title>
  </head>
  <body>
    <form method="POST" action="{{ route( 'post.store' ) }}">
      <label for="title">
        Title
        <input type="text" name"title" value="{{ old('title ')}}" placeholder="Enter a post title...">
      </label>
      <label for="content">

      </label>
    </form>
  </body>
</html>
