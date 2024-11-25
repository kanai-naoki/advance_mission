window.addEventListener("load", () => {
    function sendData() {
        const XHR = new XMLHttpRequest();

        // FormData オブジェクトと form 要素を紐づけます
        const FD = new FormData(form);

        // リクエストをセットアップします
        XHR.open("GET", "/");

        // 送信したデータは、ユーザーがフォームで提供したものです
        XHR.send(FD);
    }

    
    // form 要素を取得
    const form = document.getElementById("search_form");

    // 'submit' イベントのハンドラーを追加
    select.addEventListener("onchange", (event) => {
        
        
        event.preventDefault();

        sendData();
    });
});