<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rase</title> 
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
</head>

<body class="body">
    <header class="header">
        <div class="header_content">
            <svg class="genericons-neue genericons-neue-hierarchy" width="16px" height="16px"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="genericons-neue.svg#hierarchy"></use></svg>
            <h2>Rase</h2>
        </div>
    </header>

    <main class="main">
    @yield('content')
    </main>
</body>

</html>