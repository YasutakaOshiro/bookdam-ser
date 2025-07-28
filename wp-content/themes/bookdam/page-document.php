<?php
/*
Template Name: 資料ダウンロード
*/
// 他のサイトでインラインフレーム表示を禁止する（クリックジャッキング対策）
header('X-FRAME-OPTIONS: SAMEORIGIN');

// セッション開始
session_start();
header('Expires: -1');
header('Cache-Control:');
header('Pragma:');

// HTML特殊文字をエスケープする関数
function h($str) {
    return htmlspecialchars($str,ENT_QUOTES,'UTF-8');
}

$token = bin2hex(random_bytes(32));
?>

<?php get_header(); ?>

<div id="contents">
    <a href="<?php echo home_url('/'); ?>" class="contact__logo"><img src="<?php echo home_url('asset/img/common/img_logo01.webp'); ?>" alt="株式会社ブックダム"></a>
    <div class="contact__main">
        <div class="main__info">
            <div class="main__info--txtbox">
                <h1 class="common_bookttl">
                    <span class="enb entxt">DOWNLOAD</span>
                    <span class="jp">資料ダウンロード</span>
                </h1>
                <p class="lead">ブックダムは、出版を通じて御社のビジョン実現を支援します。<br class="pc">私たちの企業出版がビジネス成長の新たな武器となる理由を、<br class="pc">まずは資料請求でお確かめください。</p>
            </div>
            <div class="main__info--case">
                <h2 class="ttl">この資料でわかること</h2>
                <ul class="list type_check">
                    <li>企業出版で成果を出すためのポイント</li>
                    <li>ブックダムのサービス詳細</li>
                    <li>伴走支援事例</li>
                </ul>
            </div>
            <div class="main__info--staff"><img src="<?php echo home_url('asset/img/document/img_staff01.webp'); ?>" alt=""></div>
        </div>
        <div class="form">
            <form action="<?php echo home_url('document/thanks/'); ?>" method="post" enctype="multipart/form-data"
                class="formwrap">
                <div class="dlwrap">
                    <dl class="flx">
                        <dt class="flx jfc_sb">
                            <p class="title required">お名前</p>
                        </dt>
                        <dd class="flexbox">
                            <div class="input_box">
                                <input type="text" name="person" id="" class="inputarea inputName" placeholder="例）出版太郎">
                            </div>
                            <span class="err errReq errName"></span>
                        </dd>
                    </dl>
                    <dl class="flx">
                        <dt class="flx jfc_sb">
                            <p class="title required">フリガナ</p>
                        </dt>
                        <dd class="flexbox">
                            <div class="input_box">
                                <input type="text" name="kana" id="" class="inputarea inputKana" placeholder="例）シュッパンタロウ">
                            </div>
                            <span class="err errReq errKana"></span>
                        </dd>
                    </dl>
                    <dl class="flx">
                        <dt class="flx jfc_sb">
                            <p class="title required">会社名</p>
                        </dt>
                        <dd class="flexbox">
                            <div class="input_box">
                                <input type="text" name="company" id="" class="inputarea inputCompany" placeholder="例）株式会社ブックダム">
                            </div>
                            <span class="err errReq errCompany"></span>
                        </dd>
                    </dl>
                    <dl class="flx">
                        <dt class="flx jfc_sb">
                            <p class="title required">電話番号</p>
                        </dt>
                        <dd>
                            <div class="input_box">
                                <input type="tel" name="tel" id="" class="inputarea inputTel" pattern="\d{2,4}-?\d{3,4}-?\d{3,4}"
                                    placeholder="例）000000000000 （ハイフンなし）">
                            </div>
                            <span class="err errReq errtel"></span>
                        </dd>
                    </dl>
                    <dl class="flx">
                        <dt class="flx jfc_sb">
                            <p class="title required">メールアドレス</p>
                        </dt>
                        <dd>
                            <div class="input_box">
                                <input type="email" name="email" id="" class="inputarea inputEmail"
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="例）info@example.com">
                            </div>
                            <span class="err errReq erremail"></span>
                        </dd>
                    </dl>
                    <dl class="flx">
                        <dt class="flx jfc_sb">
                            <p class="title required">所在地</p>
                        </dt>
                        <dd class="flexbox">
                            <div class="select">
                                <select name="pref" id="" class="selectbox selectPref">
                                    <option value="">ご選択ください</option>
                                    <option value="北海道">北海道</option>
                                    <option value="青森県">青森県</option>
                                    <option value="岩手県">岩手県</option>
                                    <option value="宮城県">宮城県</option>
                                    <option value="秋田県">秋田県</option>
                                    <option value="山形県">山形県</option>
                                    <option value="福島県">福島県</option>
                                    <option value="茨城県">茨城県</option>
                                    <option value="栃木県">栃木県</option>
                                    <option value="群馬県">群馬県</option>
                                    <option value="埼玉県">埼玉県</option>
                                    <option value="千葉県">千葉県</option>
                                    <option value="東京都">東京都</option>
                                    <option value="神奈川県">神奈川県</option>
                                    <option value="新潟県">新潟県</option>
                                    <option value="富山県">富山県</option>
                                    <option value="石川県">石川県</option>
                                    <option value="福井県">福井県</option>
                                    <option value="山梨県">山梨県</option>
                                    <option value="長野県">長野県</option>
                                    <option value="岐阜県">岐阜県</option>
                                    <option value="静岡県">静岡県</option>
                                    <option value="愛知県">愛知県</option>
                                    <option value="三重県">三重県</option>
                                    <option value="滋賀県">滋賀県</option>
                                    <option value="京都府">京都府</option>
                                    <option value="大阪府">大阪府</option>
                                    <option value="兵庫県">兵庫県</option>
                                    <option value="奈良県">奈良県</option>
                                    <option value="和歌山県">和歌山県</option>
                                    <option value="鳥取県">鳥取県</option>
                                    <option value="島根県">島根県</option>
                                    <option value="岡山県">岡山県</option>
                                    <option value="広島県">広島県</option>
                                    <option value="山口県">山口県</option>
                                    <option value="徳島県">徳島県</option>
                                    <option value="香川県">香川県</option>
                                    <option value="愛媛県">愛媛県</option>
                                    <option value="高知県">高知県</option>
                                    <option value="福岡県">福岡県</option>
                                    <option value="佐賀県">佐賀県</option>
                                    <option value="長崎県">長崎県</option>
                                    <option value="熊本県">熊本県</option>
                                    <option value="大分県">大分県</option>
                                    <option value="宮崎県">宮崎県</option>
                                    <option value="鹿児島県">鹿児島県</option>
                                    <option value="沖縄県">沖縄県</option>
                                </select>
                            </div>
                            <span class="err errReq errPref"></span>
                        </dd>
                    </dl>
                </div>
                <p class="policycheck_txt">
                    <a href="<?php echo home_url('privacypolicy/'); ?>" class="pplink">個人情報保護方針</a>に同意したものとします。
                </p>
    
                <ul class="base_form--btnarea">
                    <li class="base_link">
                        <div class="btnwrap">
                            <div class="basebtn type_bg">
                                <span class="txt">この内容で送信する</span>
                                <input type="submit" value="" class="js-submit" id="formbtn">
                            </div>
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