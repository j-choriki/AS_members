<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./css/destyle.css">
<link rel="stylesheet" href="./css/style2.css">
<link rel="stylesheet" href="css/list.css">
<title>AS一覧</title>
</head>
<body>
<header>
    <h1>AS members</h1>
</header>
<main>
    <section>
        <h2>メンバー一覧</h2>
        <table class="table_sticky">
            <thead>
                <tr>
                    <th>学籍番号</th>
                    <th>氏名</th>
                    <th>担当AS</th>
                    <th>自学科</th>
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
        <div class="btn-parent"><a href="./menu.php">メニューへ戻る</a></div>
    </section>
</main>
<footer>
    <p>hal Assinstant Staff</p>
</footer>
<!-- <script></script> -->
</body>
</html>