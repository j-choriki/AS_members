<?php
// 関数の読み込み
require_once('./function.php');

// auto_timeup();

// メンバー一覧ファイルの読み込み
$member_list = file_read('./csv/member.csv');

foreach($member_list as $val){
    foreach($val as $key => $data){
        if($key !== 2){
            $list[] = $data;
        }
    }
    $show_list[] = $list;
    $list = [];
}



// viewの読み込み
require_once ('./tpl/list.php');
?>