<?php
    // 関数の読み込み
    require_once('./function.php');
    // セッションスタート
    session_start();

    // 変数の初期化
    $msg = "";
    $color = "";

    // ボタンを押された後の操作
    //ログインが押された場合
    if(isset($_POST['button']) && $_POST['button'] === 'login'){
        $member_list = file_read('./csv/member.csv');
        //  入力されたidとパスワード変数に代入
        $id = $_POST['id'];
        $pass = $_POST['pass'];

        // メンバー情報が登録されていたらログインする
        foreach($member_list as $val){
            foreach($val as $data){
                if($data == $id){
                    if($pass === $val[2]){
                        // sessionの設定
                        $_SESSION['id'] = $id;//idの登録
                        $_SESSION['time'] = time();
                        header('Location:./menu.php');
                        exit;
                    }
                }
                else {
                    $msg = "学籍番号もしくはパスワードが間違っています";
                    $color = "red";
                }
                
            }
        }
    }

    //会員登録が押された場合
    elseif(isset($_POST['button']) && $_POST['button'] === 'entry'){
        header('Location:./entry.php');
        exit;
    }
    
    // viewの読み込み
    require_once('./tpl/index.php');
?>