<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/destyle.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/entry.css">
    <title>登録画面</title>
    
</head>
<body>
    <header>
        <h1>AS members</h1>
    </header>

    <main>
        <section>
            
            
            <form action="./entry.php" method="post">

            <label for="no">学籍番号
                <input type="text" name="no" id="no" value="<?php echo $no;?>" require maxlength="5">
                <div class="<?php echo $color;?> caution"><?php echo $no_msg;?></div>
            </label>
            

             <label for="name">氏名
              <input type="text" name="name" id="name" value="<?php echo $name; ?>" require> 
              <div class="<?php echo $color;?> caution"><?php echo $name_msg;?></div> 
             </label>
             

            <label for="pass">パスワード
                <input type="password" name="pass" id="pass" require>
                <div class="<?php echo $color;?> caution"><?php echo $pass_msg;?></div>  
            </label>
            

             <label for="AS_sub">AS学科
                <select name="AS_sub" id="AS_sub" value="<?php echo $AS_sub;?>" class="cp_ipselect cp_sl05" require >
                    <option value="" hidden>選択してください</option>
                    <option value="game_planning">ゲーム企画</option>
                    <option value="game_program">ゲームプログラム</option>
                    <option value="game_cg">ゲームCG</option>
                    <option value="cg_animation">CG映像・アニメ</option>
                    <option value="illust">イラストデザイン</option>
                    <option value="music">ミュージック</option>
                    <option value="it">IT</option>
                </select>
                <div class="<?php echo $color;?> caution"><?php echo $caution;?></div>
            </label>  
               
               
            <label for="belong">所属学科
                <select name="belong" id="belong" value="<?php echo $belong; ?>" class="cp_ipselect cp_sl05" require>
                    <option value="" hidden>選択してください</option>
                    <option value="game_planning">ゲーム企画</option>
                    <option value="game_program">ゲームプログラム</option>
                    <option value="game_cg">ゲームCG</option>
                    <option value="cg_animation">CG映像・アニメ</option>
                    <option value="illust">イラストデザイン</option>
                    <option value="music">ミュージック</option>
                    <option value="it">IT</option>
                </select>
                <div class="<?php echo $color;?> caution"><?php echo $caution2;?></div>
            </label>
            

            <label for="grade">学年
                <select name="grade" id="grade" value="<?php echo $grade; ?>" class="cp_ipselect cp_sl05"require>
                    <option value="" hidden>選択してください</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                <div class="<?php echo $color;?> caution"><?php echo $caution3;?></div>
            </label>
            
            <div class="flex">
                <div><a href="./index.php" class="btn03 pushdown"><span>戻る</span></a></div>
                <button name="entry" value="entry" class="btn03 pushdown"><span>内容確認</span></button>
            </div>
            </form>
            
            </div>
        </section>
        
    </main>
    <footer>
        <p>hal Assinstant Staff</p>
    </footer>
</body>

</html>