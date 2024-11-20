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
            <div class="hamburger-menu">
                <input type="checkbox" id="menu-btn-check">
                <label for="menu-btn-check" class="menu-btn"><span></span></label>
                <div class="menu-content">
                @auth
                    <ul class="menu_area">
                        <li class="link_list">
                            <form class="menu_home" action="/" method="get">
                            @csrf
                                <button class="home_button" type="submit">Home</button>
                            </form>    
                        </li>
                        <li class="link_list"> 
                            <form class="menu_logout" action="/logout" method="post">
                            @csrf
                                <button class="logout_button" type="submit">Logout</button>
                            </form>
                        </li>
                        <li class="link_list">
                            <form class="menu_mypage" action="/my_page" method="get">
                            @csrf
                                <button class="mypage_button" type="submit">Mypage</button>
                            </form>
                        </li>
                    </ul>
                @else
                    <ul class="menu_area">
                        <li class="link_list">
                            <form class="menu_home" action="/" method="get">
                            @csrf
                                <button class="home_button" type="submit">Home</button>
                            </form>
                        </li>
                        <li class="link_list">
                            <form class="menu_home" action="/register" method="get">
                            @csrf
                                <button class="register_button" type="submit">Registration</button>
                            </form>
                        </li>
                        <li class="link_list">
                            <form class="menu_home" action="/login" method="get">
                            @csrf
                                <button class="login_button" type="submit">Login</button>
                            </form>
                        </li>
                    </ul>
                @endauth
                
                </div>
            </div>
            <div class="header_ttl_area">
                <h2 class="header_ttl">Rese</h2>
            </div>
            @yield('search')
        </div>
        
    </header>

    <main class="main">
    @yield('content')
    </main>
</body>

</html>