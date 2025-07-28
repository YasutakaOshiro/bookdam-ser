<?php
/*
Template Name: 資料ダウンロード（完了）
*/
// セッション開始
session_start();
// 他のサイトでインラインフレーム表示を禁止する（クリックジャッキング対策）
header('X-FRAME-OPTIONS: SAMEORIGIN');

// 不正遷移判定用フラグ
$url = home_url('document/');
if(!isset($_SESSION['email'])){
	header('Location:'.$url);
	exit();
}

header('Expires: -1');
header('Cache-Control:');
header('Pragma:');

// HTML特殊文字をエスケープする関数
function h($str) {
    return htmlspecialchars($str,ENT_QUOTES,'UTF-8');
}

$sessionpart = get_template_directory().'/document_form/session.php';
	include($sessionpart);
?>

<?php get_header(); ?>

<div id="contents">
    <a href="<?php echo home_url('/'); ?>" class="contact__logo"><img src="<?php echo home_url('asset/img/common/img_logo01.webp'); ?>" alt="株式会社ブックダム"></a>
    <div class="contact__main">
        <div class="contact__main--thanks">
            <?php
                $sendmailpart = get_template_directory().'/document_form/sendmail.php';
                include($sendmailpart);
            ?>
            <a href="<?php echo home_url('/'); ?>" class="basebtn">
                <span class="txt">トップページ</span>
                <span class="icon"><img src="<?php echo home_url('asset/img/common/ico_arrow01.svg'); ?>" alt=""></span>
            </a>
        </div>
    </div>
</div>

<?php get_footer(); ?>
