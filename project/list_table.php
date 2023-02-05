<?php
// 関数の読み込み
require_once ('./function.php');

auto_timeup();

// フォームが作成されている日付情報の読み込み
$list = file_read('./csv/plan.csv');

//viewの読み込み
require_once('./tpl/list_table.php'); 
?>