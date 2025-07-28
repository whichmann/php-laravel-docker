<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Spaceblogs</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1>Welcome to The Spaceblog</h1>
    <a href="{{ route('all-my-posts') }}">Check my posts</a>
    <a href="{{ route('my-single-post', ['id' => 7]) }}">Random post</a>
    <main>
        {{ $slot }}
    </main>
</body>
</html>
