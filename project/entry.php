<?php
// 関数の読み込み
require_once('./function.php');
session_start();

// 変数の初期化
$id_msg = "";
$name_msg = "";
$pass_msg = "";
$caution = "";
$caution2 = "";
$caution3 = "";
$color = "";

$id = "";
$name = "";
$pass = "";

// 入力確認から戻ってきたときの処理
if(isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['AS_sub']) && isset($_SESSION['belong']) && isset($_SESSION['grade'])){
    // if(isset($_SESSION['id']) && isset($_SESSION['name'])){
     // 値の受け取り
     $id = $_SESSION['id'];
     $name = $_SESSION['name'];
     $AS_sub = $_SESSION['AS_sub'];
     $belong = $_SESSION['belong'];
     $grade = $_SESSION['grade'];

     $check_AS = change_sub($AS_sub);
     $check_belong = change_sub($belong);
}


// 入力確定ボタンが押されたとき処理
if(isset($_POST['entry']) && $_POST['entry'] === "entry"){
    
    // 値の受け取り
    $id = $_POST['id'];
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $AS_sub = $_POST['AS_sub'];
    $belong = $_POST['belong'];
    $grade = $_POST['grade'];

      
    $page_jamp = 0;

    // 学籍番号
    if(!is_numeric($id)){
        $id_msg = "数値入力してください";
        $color = 'red'; 
    }else{
        $csv = file_read('./csv/member.csv');
        if(count($csv) === 0){
            $_SESSION['id'] = $id;
            $page_jamp++;
        }
        // 登録されていないかチェック
         for($i = 0; $i < count($csv); $i++){
            $val = $csv[$i];
            if((string)$val[0] == $id) {
                $id_msg = "登録されています";
                break;
            }else{
                //　該当なければ学籍番号を登録
                $_SESSION['id'] = $id;
                $page_jamp++;
            }
         }
    }

    // 氏名
    if(is_numeric($name) || $name === ""){
        $name_msg = "文字を入力してください";
        $color = 'red';
    }else{
        $_SESSION['name'] = $name;
        $page_jamp++; 
    }

    // パスワード
    if($pass !== "") {
        $_SESSION['pass'] = $pass;
        $page_jamp++;
    } else {
        $pass_msg = "入力してください";
        $color = 'red';
    }

    // 担当AS
    if(check($AS_sub)  === ""){
        $_SESSION['AS_sub'] = $AS_sub;
        $check_AS = change_sub($AS_sub);
        $page_jamp++; 
    }else{
        $caution = check($AS_sub);
        $color = 'red';
    }

    // 所属学科
    if(check($belong)  === ""){
        $_SESSION['belong'] = $belong;
        $check_belong = change_sub($belong);
        $page_jamp++; 
    }else{
        $caution2 = check($belong);
        $color = 'red';
    }

    // 学年
    if(check($grade)  === ""){
        $_SESSION['grade'] = $grade;
        $page_jamp++; 
    }else{
        $caution3 = check($grade);
        $color = 'red';
    }
    
    
    // 全て入力完了しればページ遷移
    if($page_jamp === 7){
        header("Location:confirm.php");
        exit;
    }
}



// viewの読み込み
require_once("./tpl/entry.php");
?>