<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $post->subject }}</title>
</head>
<body>
  <h1>{{ $post->subject }}</h1>
  <p>日付： {{ $today }}</p>
  <p>{{ $post->content }}</p>
</body>
</html>