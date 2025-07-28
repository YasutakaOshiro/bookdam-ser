<?php
date_default_timezone_set('Asia/Tokyo');

// セッション変数がなければ、空文字を代入
if(!isset($_SESSION['token'])) {
    $_SESSION['token'] = '';
}

// POST['token']の値をtoken変数に代入
$token = filter_input(INPUT_POST, 'token', FILTER_DEFAULT, FILTER_FLAG_STRIP_LOW);

// 各セッション変数を各変数に代入
$pref = isset($_SESSION['pref']) && is_string($_SESSION['pref']) ? $_SESSION['pref'] : '';
$company = isset($_SESSION['company']) && is_string($_SESSION['company']) ? $_SESSION['company'] : '';
$person = isset($_SESSION['person']) && is_string($_SESSION['person']) ? $_SESSION['person'] : '';
$kana = isset($_SESSION['kana']) && is_string($_SESSION['kana']) ? $_SESSION['kana'] : '';
$email = isset($_SESSION['email']) && is_string($_SESSION['email']) ? $_SESSION['email'] : '';
$tel = isset($_SESSION['tel']) && is_string($_SESSION['tel']) ? $_SESSION['tel'] : '';
$content = isset($_SESSION['content']) && is_string($_SESSION['content']) ? $_SESSION['content'] : '';



/*  運営側へ送信するメールの設定  */

// 送信先のメールアドレス
$to = 'info@book-dam.com';
// $to = 'oshiro@tomorrowgate.co.jp';

// 件名
$subject = '【サービスサイトから、お問合せがありました。】';
// 本文
$message = "◆お名前\n$person\n\n◆フリガナ\n$kana\n\n◆会社名\n$company\n\n◆電話番号\n$tel\n\n◆メールアドレス\n$email\n\n◆所在地\n$pref\n\n◆お問い合わせ内容\n$content";
// オプション
$option = '-f'. $to;

/*  問い合わせされた方へ自動返信するメールの設定  */

// 件名
$auto_subject = '【株式会社ブックダム】お問い合わせありがとうございます。';
// 送信元のメールアドレス
$auto_from    = 'From:' . $to;
// 本文
$auto_message = "
$person 様

お問い合わせをいただきありがとうございます。
下記内容を承りました。
なお、このメールは内容確認の為に自動返信しております。
内容を確認次第、折り返しご連絡させていただきます。
内容によっては返信を致しかねる場合もございますので、あらかじめご了承ください。
---------------------------------------------------------------
$message
---------------------------------------------------------------
";

/* セーフモードがONの場合は、mb_send_mailの第5引数が使えないため、処理を分岐して送信 */
if(ini_get('safe_mode')) {

    /*  運営側と自動返信のメールの送信が完了したら、送信完了の文章を表示する  */
    if(mb_send_mail($to, $subject, $message, "From:$email") && mb_send_mail($email, $auto_subject, $auto_message, $auto_from)) {
        echo '<div class="txtbox"><h3 class="txtbox__ttl">お問い合わせを受け付けました。</h3><p class="lead">お問い合わせいただき、まことにありがとうございます。<br class="pc">内容を確認次第、折り返しご連絡させていただきます。<br class="pc">内容によっては返信を致しかねる場合もございますので、あらかじめご了承ください。</p></div>';
    } else {
        echo '<p class="basetxt14">大変申し訳ございませんが、メールの送信に失敗しました。<br>お手数ですが最初からやり直してください。</p>';
    }

} else {

    /*  運営側と自動返信のメールの送信が完了したら、送信完了の文章を表示する  */
    if(mb_send_mail($to, $subject, $message, "From:$email", $option) && mb_send_mail($email, $auto_subject, $auto_message, $auto_from, $option)) {
        echo '<div class="txtbox"><h3 class="txtbox__ttl">お問い合わせを受け付けました。</h3><p class="lead">お問い合わせいただき、まことにありがとうございます。<br class="pc">内容を確認次第、折り返しご連絡させていただきます。<br class="pc">内容によっては返信を致しかねる場合もございますので、あらかじめご了承ください。</p></div>';
    } else {
        echo '<p class="basetxt14">大変申し訳ございませんが、メールの送信に失敗しました。<br>お手数ですが最初からやり直してください。</p>';
    }
}

// セッションの破棄
$_SESSION = array();
session_destroy();
?>