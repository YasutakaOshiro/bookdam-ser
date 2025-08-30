<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <link rel="shortcut icon" href="<?php echo home_url('asset/img/common/favicon.ico'); ?>" type="image/x-icon">
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-MKLVQFTC');</script>
  <!-- End Google Tag Manager -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MKLVQFTC"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div id="stage">
    
    <header class="header">
      <div class="header__wrap">
        <a href="<?php echo home_url(); ?>" class="header__logo"><img src="<?php echo home_url('asset/img/common/img_logo01.webp'); ?>" alt="株式会社ブックダム"></a>
        <div class="header__menuwrap menu-trigger">
          <div class="linewrap">
            <div class="line line1"></div>
            <div class="line line2"></div>
            <div class="line line3"></div>
          </div>
          <div class="txt en">MENU</div>
        </div>
        <div class="header__body">
          <ul class="header__body--list">
            <li><a href="<?php echo home_url('corporate-publishing'); ?>">企業出版とは？</a></li>
            <li><a href="<?php echo home_url('feature'); ?>">特長</a></li>
            <li><a href="<?php echo home_url('service'); ?>">サービス紹介</a></li>
            <!-- <li><a href="<?php echo home_url('case'); ?>">事例紹介</a></li> -->
            <li><a href="<?php echo home_url('about'); ?>">私たちについて</a></li>
            <li><a href="<?php echo home_url('faq'); ?>">よくある質問</a></li>
          </ul>
          <ul class="header__body--cvs">
            <li>
              <a href="<?php echo home_url('document/'); ?>" class="head_dlbtn">
                <div class="head_dlbtn__wrap">
                  <div class="head_dlbtn__wrap--txt">資料DL</div>
                  <div class="head_dlbtn__wrap--icon"><img src="<?php echo home_url('asset/img/common/svg_dl01.svg'); ?>" alt=""></div>
                </div>
              </a>
            </li>
            <li>
              <a href="<?php echo home_url('contact/'); ?>" class="head_ctbtn">
                <div class="head_ctbtn__wrap">
                  <div class="head_ctbtn__wrap--txt">相談してみる</div>
                  <div class="head_ctbtn__wrap--icon"><img src="<?php echo home_url('asset/img/common/svg_contact01.svg'); ?>" alt=""></div>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <nav class="nav" id="nav">
      <div class="nav__bg nav-close-trigger nav-close"></div>
      <div class="nav__box--close nav-close">×</div>
      <div class="nav__box">
        <ul class="nav__box--list">
          <li><a href="<?php echo home_url('/'); ?>">トップページ</a></li>
          <li><a href="<?php echo home_url('corporate-publishing/'); ?>">企業出版とは？</a></li>
          <li><a href="<?php echo home_url('features/'); ?>">特長</a></li>
          <li><a href="<?php echo home_url('service/'); ?>">サービス紹介</a></li>
          <!-- <li><a href="<?php echo home_url('case/'); ?>">事例紹介</a></li> -->
          <li><a href="<?php echo home_url('about-us/'); ?>">私たちについて</a></li>
          <li><a href="<?php echo home_url('faq/'); ?>">よくある質問</a></li>
          <li><a href="<?php echo home_url('privacypolicy/'); ?>">個人情報保護方針</a></li>
        </ul>
        <ul class="nav__box--cvs">
          <li>
            <a href="<?php echo home_url('document/'); ?>" class="basebtn type_bg">
                <span class="txt">資料請求</span>
                <span class="icon"><img src="<?php echo home_url('asset/img/common/ico_arrow01.svg'); ?>" alt=""></span>
            </a>
          </li>
          <li>
            <a href="<?php echo home_url('contact/'); ?>" class="basebtn">
                <span class="txt">お問い合わせ</span>
                <span class="icon"><img src="<?php echo home_url('asset/img/common/ico_arrow01.svg'); ?>" alt=""></span>
            </a>
          </li>
        </ul>
        <div class="nav__box--foot">
          <div class="telwrap">
                <a href="tel:03-5657-6744" class="telbox tel">
                    <div class="icon"><img src="<?php echo home_url('asset/img/common/ico_tel01.svg'); ?>" alt=""></div>
                    <div class="num">03-5657-6744</div>
                </a>
                <div class="txtbox">（受付時間：平日9:00〜17:00）</div>
            </div>
            <p class="guide">弊社では在宅ワーク推奨のため、<br class="pc">お電話が繋がりにくい場合がございます。</p>
            <p class="subtxt">ご用件のある方は<a href="<?php echo home_url('contact/'); ?>" class="txtlink">『ご相談・お問い合わせ』</a>から<br>ご連絡くださいますよう宜しくお願い致します。</p>
            <a href="https://bookdam.co.jp/" target="_blank" class="externallink"><span class="txt">ホームページはこちら</span><span class="icon"><img src="<?php echo home_url('asset/img/common/ico_external01.svg'); ?>" alt=""></span></a>
            <a href="https://note.com/bookdam/m/m4b839932ad24" class="notelink" target="_blank"><img src="<?php echo home_url('asset/img/common/bnr_note01.webp'); ?>" alt="ブックダム公式note"></a>
        </div>
      </div>
    </nav>
    <div class="fixbg">
        <picture>
            <source srcset="<?php echo home_url('asset/img/top/concept/bg_fix01_sp.webp'); ?>" media="(max-width: 896px)"
                type="image/webp">
            <img src="<?php echo home_url('asset/img/top/concept/bg_fix01.webp'); ?>" alt="">
        </picture>
    </div>