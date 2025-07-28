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



/*  運営側へ送信するメールの設定  */

// 送信先のメールアドレス
$to = 'info@book-dam.com';
// $to = 'oshiro@tomorrowgate.co.jp';

// 件名
$subject = '【サービスサイトから、資料ダウンロードがありました。】';
// 本文
$message = "◆お名前\n$person\n\n◆フリガナ\n$kana\n\n◆会社名\n$company\n\n◆電話番号\n$tel\n\n◆メールアドレス\n$email\n\n◆所在地\n$pref";
// オプション
$option = '-f'. $to;

/*  問い合わせされた方へ自動返信するメールの設定  */

// 件名
$auto_subject = '【株式会社ブックダム】資料請求ありがとうございます。';
// 送信元のメールアドレス
$auto_from    = 'From:' . $to;
// 本文
$auto_message = "
$person 様

このたびは、弊社サービスに関する資料をご請求いただき、誠にありがとうございます。
以下のURLより資料をダウンロードしていただけますので、ぜひご確認ください。

▼ 資料ダウンロードURL
https://bookdam.jp/asset/pdf/document_bookdam.pdf

ご不明点やご質問などございましたら、お気軽にお問い合わせください。
今後とも何卒よろしくお願いいたします。

---------------------------------------------------------------
$message
---------------------------------------------------------------
";

/* セーフモードがONの場合は、mb_send_mailの第5引数が使えないため、処理を分岐して送信 */
if(ini_get('safe_mode')) {

    /*  運営側と自動返信のメールの送信が完了したら、送信完了の文章を表示する  */
    if(mb_send_mail($to, $subject, $message, "From:$email") && mb_send_mail($email, $auto_subject, $auto_message, $auto_from)) {
        echo '<div class="txtbox"><h3 class="txtbox__ttl">資料請求を受け付けました。</h3><p class="lead">資料請求いただき、誠にありがとうございます。<br class="pc">ご登録のメールアドレス宛に、資料のダウンロードURLをお送りしましたので、ご確認ください。<br><br>メールが届かない場合は、迷惑メールフォルダをご確認いただくか、<br class="pc">お手数ですがお問い合わせください。<br><br>引き続き、どうぞよろしくお願いいたします。</p></div>';
    } else {
        echo '<p class="basetxt14">大変申し訳ございませんが、メールの送信に失敗しました。<br>お手数ですが最初からやり直してください。</p>';
    }

} else {

    /*  運営側と自動返信のメールの送信が完了したら、送信完了の文章を表示する  */
    if(mb_send_mail($to, $subject, $message, "From:$email", $option) && mb_send_mail($email, $auto_subject, $auto_message, $auto_from, $option)) {
        echo '<div class="txtbox"><h3 class="txtbox__ttl">資料請求を受け付けました。</h3><p class="lead">資料請求いただき、誠にありがとうございます。<br class="pc">ご登録のメールアドレス宛に、資料のダウンロードURLをお送りしましたので、ご確認ください。<br><br>メールが届かない場合は、迷惑メールフォルダをご確認いただくか、<br class="pc">お手数ですがお問い合わせください。<br><br>引き続き、どうぞよろしくお願いいたします。</p></div>';
    } else {
        echo '<p class="basetxt14">大変申し訳ございませんが、メールの送信に失敗しました。<br>お手数ですが最初からやり直してください。</p>';
    }
}

// セッションの破棄
$_SESSION = array();
session_destroy();
?>