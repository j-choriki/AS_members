<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./css/destyle.css">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/menu.css">
<link rel="stylesheet" href="./css/humberger.css">
<link rel="stylesheet" href="./css/fadeIn.css">
<title>メニュー</title>
</head>
<body>
    <header>
        <h1>AS members</h1>
    </header>

     <!-- ハンバーガーメニュー -->
     <div class="openbtn"><span></span><span></span><span></span></div>
        <nav id="g-nav">
            <div class="g-nav-list" id="logout">
                <ul>
                    <li><a href="./menu.php?action=logout">ログアウト</a></li>
                </ul>
            </div>
        </nav>

    <section>
        <h2>メニュー</h2>
        <ul>
            <li class="btn-parent box fadeUp delay-time02 "><a href="./list_table.php">メンバ-リスト</a></li>
            <li class="btn-parent box fadeUp delay-time04 "><a href="./form.php">参加フォーム</a></li>
        </ul>
    </section>


<script src="./js/jquery-3.6.0.min.js"></script>
<script src="./js/home.js"></script>

</body>
</html>