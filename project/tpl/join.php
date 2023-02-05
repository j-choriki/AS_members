<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./css/destyle.css">
<link rel="stylesheet" href="./css/style2.css">
<link rel="stylesheet" href="./css/join.css">
<title>参加確認</title>
</head>
<body>
    <header>
        <h1>AS members</h1>
    </header>

    <main>
        <section>
            <h2><?php echo $day;?><span>参加確認フォーム</span></h2>
            <form action="./join.php" method="get">
                <input type="hidden" name="date" value="<?php echo $date;?>">
                <button name="join" value="agree" class="btn03 pushdown <?php echo $display1;?>"><span>参加する</span></button>
                <button name="join" value="cancel" class="btn03 pushdown <?php echo $display2;?>"><span>参加をやめる</span></button>
            </form>
            <div class="btn-parent"><a href="./menu.php">メニューへ</a></div>
        </section>
    </main>

    <footer>
        <p>hal Assinstant Staff</p>
    </footer>

</body>
</html>