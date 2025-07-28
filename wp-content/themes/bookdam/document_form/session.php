<?php

// セッション変数がなければ、空文字を代入
if(!isset($_SESSION['token'])) {
    $_SESSION['token'] = '';
}

// POSTされたデータを変数に代入（magic_quotes_gpc = On ＋ NULLバイト 対策）
foreach (array('token','company','pref','person','kana','email','tel') as $v) {
    $$v = filter_input(INPUT_POST, $v, FILTER_DEFAULT);
}

// セッション変数に代入
$_SESSION['pref'] = $pref;
$_SESSION['company'] = $company;
$_SESSION['person'] = $person;
$_SESSION['kana'] = $kana;
$_SESSION['email'] = $email;
$_SESSION['tel'] = $tel;

// 確認用画面の表示
?>