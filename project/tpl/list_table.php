<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./css/destyle.css">
<link rel="stylesheet" href="./css/style2.css">
<link rel="stylesheet" href="./css/list_table.css">


<title>一覧メニュー</title>
</head>
<body>
    <header>
        <h1>AS members</h1>
    </header>

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

    <footer>
        <p>hal Assinstant Staff</p>
    </footer>
</body>
</html>