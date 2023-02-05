<?php
// 関数の読み込み
require_once('./function.php');

auto_timeup();

// 学籍番号を取得
$id = $_SESSION['id'];

// 日付情報を取得
if(isset($_GET['date'])){
    $date = $_GET['date'];
}

//日付け表記変換(例:20200909 => 09月09日) 
$day = change_day($date);

// 変数の初期化
$display1 = "show";
$display2 = "none";

// 指定日のリストに自分の情報があるか確認
$confirm_file = file_read('./csv/'. $date .'/' . $date .'.csv');
foreach($confirm_file as $data){
    //指定日にすでにデータがあれば表示しない、なければ表示するために変数の入れ替えを行う
    if($data[0] === $id){ 
        $display1 = "none";
        $display2 = "show";
        break;
    }   
}

// 参加ボタンを押されたとき
if(isset($_GET['join']) && $_GET['join'] === 'agree') {
    // 参加回数を1増やす
    // メンバーリストの読み込み
    $member = file_read('./csv/member.csv');
    // idによるメンバーの検索
    foreach($member as $key => $data) {
        if($data[0] == $id) {
            $member[$key][6] = (int)$data[6] + 1;
            // 指定ページの参加リストにデータを追加
            $entry_list[] = $member[$key][0];
            $entry_list[] = $member[$key][1];
            $entry_list[] = $member[$key][3];
            // 指定日のファイルに必要データの書き込み
            file_register('./csv/'. $date .'/' . $date .'.csv',$entry_list);
        }
        // 回数を一回増やしたリストでファイルを更新
        file_write('./csv/member.csv',$member);
    }
// 参加取りやめボタンを押したとき
} elseif(isset($_GET['join']) && $_GET['join'] === 'cancel') {
    // 参加回数を1回減らす
    // メンバーリストのファイルの読み込み
    $member = file_read('./csv/member.csv');

     // idによるメンバーの検索
     foreach($member as $key => $data) {
        if($data[0] == $id) {
            if($data[6] != 0){
                $member[$key][6] = (int)$data[6] - 1;
            }
            // 回数を一回増やしたリストでファイルを更新
            file_write('./csv/member.csv',$member);
        }
    }
    // 指定日のメンバーリストから削除
    $join_list = file_read('./csv/'. $date .'/' . $date .'.csv');
    foreach($join_list as $key => $val) { 
        if($val[0] != $id){
            $update_list[] = $val; 
        }
    }
    file_write('./csv/'. $date .'/' . $date .'.csv',$update_list);
}



// ボタンが押され処理が終了すればメニュー画面に遷移
if(isset($_GET['join'])) {
    header('location:./menu.php');
    exit;
}



// viewの読み込み
require_once('./tpl/join.php');
?>