<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./css/destyle.css">
<link rel="stylesheet" href="./css/style2.css">
<link rel="stylesheet" href="css/list.css">
<link rel="stylesheet" href="./css/humberger.css">
<title>AS一覧</title>
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
        <h2>メンバー一覧</h2>
        <div class="flex">
        <table class="table_sticky">
            <thead>
                <tr>
                    <th>学籍番号</th>
                    <th>氏名</th>
                    <th>担当AS</th>
                    <th>学年</th>
                    <th>参加回数</th>
                </tr>
            </thead>
            <?php foreach($show_list as $val): ?>
                <tr>
                    <?php foreach($val as $data): ?>
                    <td><?php echo $data; ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </table>
        </div>
        <div class="btn-parent"><a href="./menu.php">メニューへ戻る</a></div>
    </section>
</main>

<script src="./js/jquery-3.6.0.min.js"></script>
<script src="./js/home.js"></script>
</body>
</html>