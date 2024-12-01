<!DOCTYPE html>
<html class="html" lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rese</title> 
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/orner_app.css') }}">
    @yield('css')
</head>

<body class="body">
    <header class="header">
        <div class="header_content">
            <div class="hamburger-menu">
                <input type="checkbox" id="menu-btn-check">
                <label for="menu-btn-check" class="menu-btn"><span></span></label>
                <div class="menu-content">
                    <ul class="menu_area">
                        <li class="link_list">
                            <form class="orner_home" action="/orner" method="get">
                            @csrf
                                <button class="orner_home_button" type="submit">Home</button>
                            </form>    
                        </li>
                        <li class="link_list">
                            <form class="book_lists" action="/books" method="get">
                            @csrf
                                <button class="book_lists_button" type="submit">BookLists</button>
                            </form>
                        </li>
                        <li class="link_list"> 
                            <form class="menu_logout" action="/logout" method="post">
                            @csrf
                                <button class="logout_button" type="submit">Logout</button>
                            </form>
                        </li>            
                    </ul>                
                </div>
            </div>
            <div class="header_ttl_area">
                <h2 class="header_ttl">Rese</h2>
            </div>
        </div>       
    </header>
    
    <main class="main">
    @yield('content')
    </main>
</body>

</html>
 