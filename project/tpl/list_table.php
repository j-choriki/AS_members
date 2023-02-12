<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./css/destyle.css">
<link rel="stylesheet" href="./css/style2.css">
<link rel="stylesheet" href="./css/list_table.css">
<link rel="stylesheet" href="./css/humberger.css">

<title>一覧メニュー</title>
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

    <main>
        <section>
            <h2>メンバーリスト<span>メニュー</span></h2>
            <ul>
                <li class="btn-parent"><a href="./list.php">ASメンバーList</a></li>
                <?php foreach($date_list as $key => $val):?>
                    <li class="btn-parent"><a href="./show_list.php?date=<?php echo $list[$key][0]?>"><?php echo $val; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </section>

    </main>

<script src="./js/jquery-3.6.0.min.js"></script>
<script src="./js/home.js"></script>
</body>
</html>