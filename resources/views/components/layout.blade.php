@props(['title'])


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spaceblogs</title>
    <link rel="preload" href="https://unpkg.com/@sakun/system.css" as="style" onload="this.rel='stylesheet'" />
    @vite('resources/css/app.css')
</head>
<body>
    <div class="window main">
        @if (session('success'))
        <div style="background:#e6ffed;border:1px solid #b7ebc6;color:#207544;padding:16px 24px;border-radius:10px;font-size:1.08rem;font-weight:500;box-shadow:0 2px 8px rgba(32,117,68,0.07);margin-bottom:24px;text-align:center;">
            {{ session('success') }}
        </div>
        @endif
        <div class="title-bar">
            <h1 class="title">{{ $title }}</h1>
        </div>
        <nav class="details-bar">
            <span>
                <a class="link" href="{{ route('add-post') }}">Add new post</a>
            </span>
            <span>
                <a class="link" href="{{ route('all-my-posts') }}">Check my posts</a>
            </span>
        </nav>
        <main>
            {{ $slot }}
        </main>
    </div>
</body>
</html>
