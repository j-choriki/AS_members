<?php
// require_once('../config.php');

/**
 * データベース登録
 * @param $name 氏名
 * @param $AS_name 所属AS名
 * @param $belong 所属学科
 * @param $join_cnt 参加回数
 */
// function join_DB($name,$AS_name,$belong,$join_cnt){
//     $link = mysqli_connect(HOST,USER_ID,PASSWORD,DB_NAME); // DB情報の読み込み
//     mysqli_set_charset($link,'utf8'); // 文字コードの設定  
//     $sql = "INSERT INTO member($name,$AS_name,$belong,$join_cnt) VALUES('".$name."','".$AS_name."','".$belong."','".$join_cnt.");";
//     mysqli_query($link,$sql);
//     mysqli_close($link);//DBクローズ
// }

/**
 * データの全件取得
 */

// function show_DB(){
//     $link = mysqli_connect(HOST,USER_ID,PASSWORD,DB_NAME); // DB情報の読み込み
//     mysqli_set_charset($link,'utf8'); // 文字コードの設定 
//     $result = mysqli_query($link,"SELECT * FROM member ORDER BY join_cnt;");
//     // 配列の初期化
//     $list = [];
//     while($row = mysqli_fetch_array($result)){
//         $list[] = $row;
//     }
//     mysqli_close($link);//DBクローズ
//     return $list;
// }

/**
 * ファイルデータの読み込み
 * @param $file_pass ファイルディレクトリ
 * @param $regist_data 登録データ配列
 */

function file_read($file_pass){
    $list = [];
    $fp = fopen($file_pass,'r');
    while($row = fgets($fp)){
        $row  = str_replace("\r","",$row); //改行の\rを置き換える
        $row  = str_replace("\n","",$row); //改行の\nを置き換える
        // 上記二つを書くことで改行コードすべて対応する
        $list[] = explode(',',$row);//二次元配列となる
    }
    return $list;
}

/**
 * ファイルデータの上書き
 * @param string $file_pass ファイルディレクトリ
 * @param array $write_data 上書きデータ配列
 */

function file_write($file_pass,$write_data) {
    $fp = fopen($file_pass,"w");
    foreach($write_data as $data){
        fputs($fp,implode(",",$data)."\n");
    }
    fclose($fp);
}


/**
 * ファイルへデータ登録
 * @param $file_pass ファイルディレクトリ
 * @param $regist_data 登録データ配列
 */
function file_register($file_pass,$regist_data){
    $fp = fopen($file_pass,"a");
    fputs($fp,implode(',',$regist_data)."\n");
    fclose($fp);
}

/**
 *  選択科目の読み替え
 * @param $change 書き換えの科目名 
 */

 function change_sub($change){
    $sub="";
    if($change === "game_planning"){
        $sub = "ゲーム企画";
    }
    elseif($change === "game_program"){
        $sub = "ゲームプログラム";
    }
    elseif($change === "game_cg"){
        $sub = "ゲームCG";
    }
    elseif($change === "cg_animation"){
        $sub ="CG映像・アニメ";
    }
    elseif($change === "illust"){
        $sub = "イラストデザイン";
    }
    elseif($change === "music"){
        $sub = "ミュージック";
    }
    elseif($change === "it"){
        $sub = "IT";
    }
    return $sub;
 }

/**
 * 時間を計算し、15分たったらセッションを削除してログイン画面に遷移
 * 
 */
 function auto_timeup() {
    session_start();
    $time1 = time();
    $time2 = $_SESSION['time'];
    if($time1 - $time2 > 600) {
        $_SESSION = [];
        session_destroy();
        header('location:./index.php');
        exit;
    }
 }


/**
 * 変数を確認し、空白なら文字列を、空白でなければ何も返さない
 * @param string $val:確認する文字列
 */
function check($val){
    if($val === ""){
        $msg = "項目選択してください";
    }
    else {
        $msg = "";
    }
    return $msg;
}

/**
 * 日付の文字列を「●月●日」に変換し、その配列を返す
 * @param array $list:日付け表示を変更したいリスト
 */

 function change_date($list){
    foreach($list as $val){
        $year = date('Y');//その年の年号(西暦)
        foreach($val as $data){
            // 西暦を文字列から抜く
            $data = str_replace($year,'',$data);
            // 「月」の文字を特定文字数のところに追加
            $data = substr_replace($data, '月', 2, 0);
            // 末尾に「日」を追加
            $data .= '日';
            $update_date[] = $data;
        }
    }
    return $update_date;
 }

 /**
  * 日付の文字列を「●月●日」に変換し、その変数を返す
  * @param string $day:変換した日付け
  */

function change_day($day){
    $year = date('Y');//その年の年号(西暦)
    // 西暦を文字列から抜く
    $day = str_replace($year,'',$day);
    // 「月」の文字を特定文字数のところに追加
    $day = substr_replace($day, '月', 2, 0);
    // 末尾に「日」を追加
    $day .= '日';

    return $day;
}

?>