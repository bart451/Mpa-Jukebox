
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('app.css') }}" rel="stylesheet">
</head>
<body>
<div>
    <h1>Welkom</h1>

    <a href="{{ route('genres') }}">Genres</a>
</div>
</body>
</html>
