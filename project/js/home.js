$(".openbtn").click(function () {//ボタンがクリックされたら
    $(this).toggleClass('active');//ボタン自身にactiveクラスを付与し
    $("#g-nav").toggleClass('panelactive');//ナビゲーションにpanaelactiveクラスを付与
});

$("#g-nav a").click(function () {//ナビゲーションのリンクがクリックされたら
    $(".openbtn").removeClass('active');//ボタンのactiveクラスを除去し
    $("#g-nav").removeClass('panelactive');//ナビーゲーションのpanaelactiveクラスも除去
});