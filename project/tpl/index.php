<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/destyle.css">
<link rel="stylesheet" href="./css/index.css">
<!-- google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@300&family=Martel&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
<title>ログイン</title>
</head>
<body>
    <header>
        <h1>AS members</h1>
    </header>

    <main>
        <section>
            <p class="<?php echo $color;?>"><?php echo $msg;?></p>
            <form action="./index.php" method="post">
                <label for="id">学籍番号
                <input type="text" name="id" id="id" reqired maxlength="5"  >
                </label>

                <label for="pass">パスワード
                <input type="password" name="pass" id="pass" reqired>
                </label>    

                <button name="button" value="login" class="btn03 pushdown"><span>ログイン</span></button>
                <div class="entry"><a href="./entry.php"><span>メンバー登録</span>はこちら</a></div>
            </form>
        </section>
    </main>

    <footer>
        <p>hal Assinstant Staff</p>
    </footer>
<!-- <script></script> -->
</body>
</html>