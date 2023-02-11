<?php
// 関数の読み込み
require_once ('./function.php');

// auto_timeup();

// フォームが作成されている日付情報の読み込み
$list = file_read('./csv/plan.csv');

// 日付表示変更のための処理
foreach($list as $val){
    // 日付を変更した値を入れ直す
    $date_list = change_date($list);
}


//viewの読み込み
require_once('./tpl/list_table.php'); 
?>