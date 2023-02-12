<?php
// 関数の読み込み
require_once('./function.php');

// auto_timeup();

$date = $_GET['date'];
$change_list[][] = $date;
$change = change_date($change_list);


// 配列・変数の初期化
$date_list = [];
$grade_list = file_read('./csv/member.csv');
// 以下学年の人数を数える変数
$first = 0;
$second = 0;
$three = 0;
$four = 0;

if(isset($_GET['select_AS']) === false){
    // ファイルに指定日付のメンバー情報を代入
    $date_list = file_read('./csv/'. $date .'/' . $date . '.csv');
    
    //各学年の人数把握 
    foreach($date_list as $key => $val){ //ASの日のリスト
        foreach($grade_list as $key2 => $val2){ //ASのメンバーリスト
            if($val[0] == $val2[0]){
                if($val2[5] == 1){
                    $first++;//一年生の人数
                } elseif($val2[5] == 2) {
                    $second++; //２年生の人数
                } elseif($val2[5] == 3) {
                    $three++; //三年生の人数
                } else {
                    $four++; //四年生の人数 
                }
                break;//同じ学籍番号の生徒を発見すれば繰り返しを抜ける
            }
        }
    }

}else{
    // 選択されたAS別のリストを作成
    $select = change_sub($_GET['select_AS']);
    $select_list = file_read('./csv/'. $date .'/' . $date . '.csv'); 

    foreach($select_list as $val) {
        if($val[2] == $select){
            $date_list[] = $val;
        }
    }
    
    //各学年の人数把握 
    foreach($date_list as $key => $val){ //ASの日のリスト
        foreach($grade_list as $key2 => $val2){ //ASのメンバーリスト
            if($val[0] == $val2[0]){
                if($val2[5] == 1){
                    $first++;//一年生の人数
                } elseif($val2[5] == 2) {
                    $second++; //２年生の人数
                } elseif($val2[5] == 3) {
                    $three++; //三年生の人数
                } else {
                    $four++; //四年生の人数 
                }
                break;//同じ学籍番号の生徒を発見すれば繰り返しを抜ける
            }
        }
    }
}


// viewの読み込み
require_once('./tpl/show_list.php');
?>