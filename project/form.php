<?php 
//関数の読み込み
require_once('./function.php');
// auto_timeup();
// 変数の初期化
$data = "";
// 配列の初期化
$plan = [];

// 日付ファイルのパス
$plan_file = './csv/plan.csv';

// 作成ボタンを押されたら
if(isset($_GET['btn']) && $_GET['btn'] === 'btn') {
    // 日付情報の受け取り
    $date = $_GET['selectDate'];
    // 受け取った日づけのファイルを作成
    $dir = './csv/'.$date;
    mkdir($dir,0777);

    // 受け取った日付をファイルに登録
    $planAdd[] =  $date;
    file_register($plan_file,$planAdd);
}

// 日付情報のファイルの読み込み
$plan_date = file_read($plan_file);

if(count($plan_date) != 0){
    // 取得日時に「月日」を追加
    $plan = change_date($plan_date);
    // 取得日時をそのまま格納する配列を作成(例: 20220924)
    foreach($plan_date as $defo_column){
        foreach($defo_column as $defo){
            $defo_list[] = $defo;
        } 
    }
}else{
    $plan = [];
}

// viewを読み込む
require_once('./tpl/form.php');
?>