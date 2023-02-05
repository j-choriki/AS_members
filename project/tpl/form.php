<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./css/destyle.css">
<link rel="stylesheet" href="./css/style2.css">
<link rel="stylesheet" href="./css/form.css">

<!-- font-awsome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<!-- google fontsの読み込み -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@300&family=Martel&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
<!-- datepickerの読み込み -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
 <!-- datepiccker -->
    <script>
    $( function() {
      $( "#datepicker" ).datepicker({
          dateFormat: 'yymmdd',
      });
    } );
    </script>
<title>参加フォーム</title>
</head>
<body>
  <header>
    <h1>AS memberss</h1>
  </header>

  <main>
    <section>
        <h2>スケジュール</h2>
        <?php foreach($plan as $key => $val):?>
            <div class="btn-parent"><a href="./join.php?date=<?php echo $defo_list[$key];?>"><?php echo $val;?></a></div>
        <?php endforeach;?>
    </section>

    <div class="btn-parent"><a href="./menu.php">戻る</a></div>
    
    <button id="openModal"><i class="fa-solid fa-calendar-days"></i></button>

    <!-- モーダルエリアここから -->
    <section id="modalArea" class="modalArea">
      <div id="modalBg" class="modalBg"></div>
      <div class="modalWrapper">
        <div class="modalContents">
          <h2>日程追加</h2>
          <form action="./form.php" method="get" id="form">
              <div><input type="text" id="datepicker" name="selectDate" placeholder="タップして！"></div>
              <button name="btn" value="btn" class="btn-parent2">作成</button>
          </from>
        </div>
        <div id="closeModal" class="closeModal">
          ×
        </div>
      </div>
    </section>
    <!-- モーダルエリアここまで -->
  </main>

  <footer>
    <p>hal Assinstant Staff</p>
  </footer>
  <script src="./js/script.js"></script>
</body>
</html>