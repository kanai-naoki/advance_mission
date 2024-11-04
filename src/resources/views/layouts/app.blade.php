<!DOCTYPE html>
<html class="html" lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rese</title> 
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
</head>

<body class="body">
    <header class="header">
        <div class="header_content">
            {{-- アイコンを入れる --}}
            <h2 class="header_ttl">Rese</h2>
        </div>
    </header>

    <main class="main">
    @yield('content')
    </main>
</body>

</html>