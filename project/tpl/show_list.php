<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./css/destyle.css">
<link rel="stylesheet" href="./css/style2.css">
<link rel="stylesheet" href="./css/show_list.css">
<link rel="stylesheet" href="./css/humberger.css">
<link rel="stylesheet" href="./css/fadeIn.css">
<!-- font-awsome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

<title><?php echo $date ;?></title>
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
    <section id="modalArea" class="modalArea">
    <!-- ここからモーダルエリア -->
    <div id="modalBg" class="modalBg"></div>
    <div class="modalWrapper">
      <div class="modalContents">
        <form action="./show_list.php" method="get">
        <h2>コース別検索</h2>
        <label for="select_AS" class="center">
                <select name="select_AS" id="source" class="custom-select sources" placeholder="AS選択">
                    <option value=""></option>
                    <option value="game_planning">ゲーム企画</option>
                    <option value="game_program">ゲームプログラム</option>
                    <option value="game_cg">ゲームCG</option>
                    <option value="cg_animation">CG映像・アニメ</option>
                    <option value="illust">イラストデザイン</option>
                    <option value="music">ミュージック</option>
                    <option value="it">IT</option>
                </select>
               </label>  
               <div><input type="submit" value="検索" id="serch"></div>
               <input type="hidden" name="date" value="<?php echo $date;?>">
        </form>
        </div>
      <div id="closeModal" class="closeModal">
        ×
      </div>
    </div>
    </section>
    <!-- ここまでモーダルエリア -->
    <section class="section box fadeUp2">
      <h2><?php echo $change[0];?><span>メンバー</span></h2>
      <div class="flex">
        <table class="table_sticky">
          <thead>
            <tr>
                <th>学籍番号</th>
                <th>氏名</th>
                <th>担当AS</th>
            </tr>
            </thead>   
            <?php foreach($date_list as $val): ?>
                <tr>
                    <?php foreach($val as $data): ?>
                    <td><?php echo $data; ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </table>
        </div>
    </section>
    
    <!-- 学年別人数の表示 -->
    
    <section id="modalArea2" class="modalArea">
    <!-- ここからモーダルエリア -->
    <div id="modalBg2" class="modalBg"></div>
    <div class="modalWrapper grade">
      <div class="modalContents">
            <h2>各学年人数</h2>
            <ul class="grade">
                <li>１年生:　<?php echo $first;?>人</li>
                <li>２年生:　<?php echo $second;?>人</li>
                <li>３年生:　<?php echo $three;?>人</li>
                <li>４年生:　<?php echo $four;?>人</li>
            </ul>
        </div>
      <div id="closeModal2" class="closeModal">
        ×
      </div>
    </div>
    </section>
    
    <div class="btn-parent box fadeUp"><button id="openModal2">学年別人数一覧</button></div>
    <div class="btn-parent box fadeUp"><a href="./menu.php"> メニューへ戻る</a></div>
    <!-- 検索ボタン -->
    <button id="openModal"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
</main>

</body>
<script src="./js/jquery-3.6.0.min.js"></script>
<script src="./js/script.js"></script>
<script src="./js/home.js"></script>
<!-- <script src="./js/selectTag.js"></script> -->
</html>