<?php
require_once("./function.php");
session_start();
// セッション登録された値を変数に代入
$no = $_SESSION['no'];
$name = $_SESSION['name'];
$pass = $_SESSION['pass'];
$AS_sub = change_sub($_SESSION['AS_sub']);
$belong = change_sub($_SESSION['belong']);
$grade = $_SESSION['grade'];

// 入力確定ボタンが押されたときの処理
if(isset($_GET['reg']) && $_GET['reg'] === 'register'){
    // 登録データを配列に入れる
    $regist_list =[];
    $regist_list[] = $no;
    $regist_list[] = $name;
    $regist_list[] = $pass;
    $regist_list[] = $AS_sub;
    $regist_list[] = $belong;
    $regist_list[] = $grade;
    $regist_list[] = 0;//AS参加回数
    
    // 登録データをファイルに登録
    file_register('./csv/member.csv',$regist_list);

    // menuページへ移動
    header('location:./menu.php');
    exit;
}

// viewの読み込み
require_once("./tpl/confirm.php");
?>