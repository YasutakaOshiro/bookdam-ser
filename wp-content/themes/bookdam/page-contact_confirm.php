<?php
/*
Template Name: お問い合わせ（確認）
*/
?>

<?php
// 他のサイトでインラインフレーム表示を禁止する（クリックジャッキング対策）
header('X-FRAME-OPTIONS: SAMEORIGIN');

// セッション開始
session_start();


// 不正遷移判定用フラグ
// $url = home_url('contact/');
// if(!isset($_POST['token'])){
//     header('Location: '.$url);
//     exit();
// }

header('Expires: -1');
header('Cache-Control:');
header('Pragma:');

// HTML特殊文字をエスケープする関数
function h($str) {
    return htmlspecialchars($str,ENT_QUOTES,'UTF-8');
}
$sessionpart = get_template_directory().'/contact_form/session.php';
	include($sessionpart);
?>

<?php get_header(); ?>

<div id="contents">
    <section class="undermv type_simple">
        <h1 class="undermv__ttl">
            <span class="jp">お問い合わせ内容のご確認</span>
            <span class="common_h2">
                <div class="maintxt en">CONTACT</div>
            </span>
        </h1>
        <div class="bread">
            <?php breadcrumb(); ?>
        </div>
    </section>
    <div class="contact__main">
        <div class="main__step">
            <ul class="main__step--list">
                <li>
                    <div class="en">Step.01</div>
                    <div class="txt">情報の入力</div>
                </li>
                <li class="active">
                    <div class="en">Step.02</div>
                    <div class="txt">内容の確認</div>
                </li>
                <li>
                    <div class="en">Step.03</div>
                    <div class="txt">完了</div>
                </li>
            </ul>
        </div>
        <div class="form">
            <p class="form__lead lead type_confirm">ご入力内容にお間違いかないかお確かめの上、「上記内容で送信する」のボタンをクリックしてください。</p>
            <form action="<?php echo home_url('contact/thanks/'); ?>" method="post" enctype="multipart/form-data"
                class="formwrap">
                <div class="dlwrap">
                    <dl class="flx type_confirm">
                        <dt class="flx jfc_sb type_confirm">
                            <p class="title required">お問い合わせ内容</p>
                        </dt>
                        <dd>
                            <p class="session"><?php echo h($inquiry); ?></p>
                        </dd>
                    </dl>
                    <dl class="flx type_confirm">
                        <dt class="flx jfc_sb type_confirm">
                            <p class="title required">会社名</p>
                        </dt>
                        <dd>
                            <p class="session"><?php echo h($company); ?></p>
                        </dd>
                    </dl>
                    <dl class="flx type_confirm">
                        <dt class="flx jfc_sb type_confirm">
                            <p class="title">会社ホームページURL</p>
                        </dt>
                        <dd>
                            <p class="session"><?php echo h($companyurl); ?></p>
                        </dd>
                    </dl>
                    <dl class="flx type_confirm">
                        <dt class="flx jfc_sb type_confirm">
                            <p class="title">部署名</p>
                        </dt>
                        <dd>
                            <p class="session"><?php echo h($busho); ?></p>
                        </dd>
                    </dl>
                    <dl class="flx type_confirm">
                        <dt class="flx jfc_sb type_confirm">
                            <p class="title required">お名前</p>
                        </dt>
                        <dd>
                            <p class="session"><?php echo h($person); ?></p>
                        </dd>
                    </dl>
                    <dl class="flx type_confirm">
                        <dt class="flx jfc_sb type_confirm">
                            <p class="title required">フリガナ</p>
                        </dt>
                        <dd>
                            <p class="session"><?php echo h($kana); ?></p>
                        </dd>
                    </dl>
                    <dl class="flx type_confirm">
                        <dt class="flx jfc_sb type_confirm">
                            <p class="title required">住所</p>
                        </dt>
                        <dd>
                            <p class="session"><?php echo h($address); ?></p>
                        </dd>
                    </dl>
                    <dl class="flx type_confirm">
                        <dt class="flx jfc_sb type_confirm">
                            <p class="title">連絡先電話番号</p>
                        </dt>
                        <dd>
                            <p class="session"><?php echo h($tel); ?></p>
                        </dd>
                    </dl>
                    <dl class="flx type_confirm">
                        <dt class="flx jfc_sb type_confirm">
                            <p class="title required">メールアドレス</p>
                        </dt>
                        <dd>
                            <p class="session"><?php echo h($email); ?></p>
                        </dd>
                    </dl>
                    <dl class="flx type_confirm">
                        <dt class="flx jfc_sb type_confirm">
                            <p class="title">お問い合わせ・ご相談内容</p>
                        </dt>
                        <dd>
                            <p class="session"><?php echo h($content); ?></p>
                        </dd>
                    </dl>
                </div>
    
                <ul class="base_form--btnarea type_confirm">
                    <li class="base_link">
                        <div class="btnwrap">
                            <div class="basebtn">
                                <span class="txt">
                                    <span class="splittxt maintxt">上記内容で送信する</span>
                                    <span class="splittxt hidetxt">上記内容で送信する</span>
                                </span>
                                <input type="submit" value="" class="js-submit">
                                <span class="icon"><img src="<?php echo home_url('asset/img/common/ico_basebtn01.svg'); ?>" alt=""></span>
                            </div>
                            <div class="btnwrap__shadow"></div>
                        </div>
                        <input type="hidden" name="token" value="<?php echo h($token); ?>">
                    </li>
                    <li class="back_link">
                        <div class="btnwrap">
                            <a href="javascript:;" onclick="javascript:window.history.back(-1);return false;" class="basebtn">
                                <span class="txt">
                                    <span class="splittxt maintxt">入力内容を修正する</span>
                                    <span class="splittxt hidetxt">入力内容を修正する</span>
                                </span>
                                <span class="icon"><img src="<?php echo home_url('asset/img/common/ico_basebtn01.svg'); ?>" alt=""></span>
                            </a>
                            <div class="btnwrap__shadow"></div>
                        </div>
                        <input type="hidden" name="token" value="<?php echo h($token); ?>">
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>


<?php get_footer(); ?>