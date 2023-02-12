<?php
// 関数の読み込み
require_once('./function.php');

if(isset($_GET['action'])){
    logout();
}

// viewの読み込み
require_once('./tpl/menu.php');
?>