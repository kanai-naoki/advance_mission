{{-- アイコン --}}
<div class="menu_content">
    <div class="menu_txt">
        <a class="menu_home" href="/">Home</a>
    </div>
    <div class="menu_txt">
        <form class="menu_logout" action="/logout" method="post">
        @csrf
            <button class="logout_button">Logout</button>
        </form>
    </div>
    <div class="menu_txt">
        <a class="menu_mypage" href="/my_page">Mypage</a>
    </div>
</div>