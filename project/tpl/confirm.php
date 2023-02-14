<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./css/destyle.css">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/confirm.css">

<title>入力内容確認</title>
</head>
<body>
    <header>
        <h1>AS members</h1>
    </header>

    <main>
        <section>
            <p class="red">以下内容で入力は間違いありませんか？</p>
            <table>
                   <tr><td>学籍番号</td><td><?php echo $id;?></td></tr>
                   <tr><td>氏名</td><td><?php echo $name;?></td></tr> 
                   <tr><td>担当AS</td><td><?php echo $AS_sub;?></td></tr> 
                   <tr><td>所属コース</td><td><?php echo $belong;?></td></tr> 
                   <tr><td>学年</td><td><?php echo $grade;?></td></tr>
            </table>
            <div class="flex">
                <div><a href="./entry.php" class="btn03 pushdown"><span>再入力</span></a></div>
                <div><a href="./confirm.php?reg=register" class="btn03 pushdown"><span>入力確定</span></a></div>
            </div>
        </section>
    </main>



<!-- <script></script> -->
</body>
</html>