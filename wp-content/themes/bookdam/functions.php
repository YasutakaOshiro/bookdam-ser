<?php

/*********************
headerから余計なものを削除
*********************/
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head','rest_output_link_wp_head');
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','wp_oembed_add_host_js');
remove_action('wp_head', 'wp_shortlink_wp_head');


/*********************
テーマの更新通知をしない
*********************/
remove_action('load-update-core.php','wp_update_themes');
// add_filter('pre_site_transient_update_themes',create_function('$a',"return null;"));


/*********************
余計なプラグインを削除
*********************/
function my_delete_plugin_files() {
	wp_deregister_script('jquery');
	wp_dequeue_style( 'jetpack-top-posts-widget' );
}
add_action( 'wp_enqueue_scripts', 'my_delete_plugin_files' );
function dequeue_jquery_migrate($scripts){
  if(!is_admin()){
   $scripts->remove('jquery');
   $scripts->add('jquery',false,array('jquery-core'),'1.10.2');
  }
 }
 add_filter('wp_default_scripts','dequeue_jquery_migrate');


/*********************
WPのバージョン番号を削除
*********************/
 function remove_src_wp_ver($dep){
  $dep->default_version = '';
 }
 add_action('wp_default_scripts','remove_src_wp_ver');
 add_action('wp_default_styles','remove_src_wp_ver');

/*********************
アイキャッチ有効化
*********************/
add_theme_support('post-thumbnails');


/*********************
画像自動トリミング
*********************/
add_image_size( 'thumb_size', 830, 471, true );


/*********************
親スラッグを取得
*********************/
function is_parent_slug() {
  global $post;
  if ($post->post_parent) {
      $post_data = get_post($post->post_parent);
      return $post_data->post_name;
  }
}


/*******************************
ブログの投稿画像１枚目をサムネにする
*******************************/
function first_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  if (!empty($matches[1])) { // 画像URLが存在するか確認
      $first_img = $matches[1][0];
  } else {
      $first_img = false; 
  }
  return $first_img;
}


/*********************
bodyにクラスを付与
*********************/
add_filter( 'body_class', 'add_page_slug_class_name' );
function add_page_slug_class_name( $classes ) {
  global $post;

  $url = $_SERVER["REQUEST_URI"];
  if ( is_home() || is_front_page() ) {
    $classes[] = 'top';
  } elseif ( is_page() ) {
    $page = get_post( get_the_ID() );
    $page_slug = $page->post_name;

    $parent_id = $post->post_parent; // 親ページのIDを取得
    $parent_slug = get_post($parent_id)->post_name; // 親ページのスラッグを取得
    $classes[] = $page_slug;
    $classes[] = $parent_slug;

  } elseif (is_single() || is_archive() || is_tax()){
    $classes[] = get_post_type( $post );
  }
  // elseif (strpos($url,'contact')) {
  //   $classes[] = 'contact';
  // }
  return $classes;
}


/*********************
titleを出力
*********************/
//add_theme_support( 'title-tag' );
function my_meta_title() {
  $sitetitle = get_bloginfo('name');  // サイトタイトル

  if( is_singular('works') ) :
    $pagetitle = CFS()->get('cf_pagetitle');

  elseif ( is_tax() ) : //一覧ページ
    $post_type = get_queried_object();
    $pagetitle = esc_attr($post_type->name).' | ';

  elseif( is_archive() ):
    $post_type = get_queried_object();
    $pagetitle = esc_attr($post_type->label).' | ';

  elseif ( !is_home() || !is_front_page() ) :
    global $post;
    $pagetitle = $post->post_title.' | '; // ページタイトル

  endif;

  if(!empty($pagetitle)):
	  $fulltitle = $pagetitle.' '.$sitetitle;
  else:
    $fulltitle = $sitetitle;
  endif;

  $title = "\n".'<title>'.$fulltitle.'</title>'."\n";
  echo $title;
}
add_action( 'wp_head', 'my_meta_title');


/*********************
descriptionを出力
*********************/
add_action('admin_menu', 'add_custom_fields');
add_action('save_post', 'save_custom_fields');

function add_custom_fields() {
  add_meta_box( 'my_sectionid', 'カスタムフィールド', 'my_custom_fields', 'page');
}
function my_custom_fields() {
  global $post;
  $page_description = get_post_meta($post->ID,'description',true);

  echo '<p>ページの説明（description）160文字以内<br>';
  echo '<input type="text" style="width: 600px;height: 40px;" name="description" value="'.esc_html($page_description).'" maxlength="160" /></p>';
}
function save_custom_fields( $post_id ) {
  if(!empty($_POST['description']))
    update_post_meta($post_id, 'description', $_POST['description'] );
  else delete_post_meta($post_id, 'description');
}
function get_meta_description() {
  global $post;
  $description = "";
  if ( is_home() || is_front_page()) {
    // ホームでは、ブログの説明文を取得
    $description = get_bloginfo( 'description' );
  }
  elseif ( is_page() ) {
    $custom = get_post_custom();
    if(!empty( $custom['description'][0])) {
      // 固定ページでは、カスタムフィールドを取得
      $description = $custom['description'][0];
    }
  }
  elseif ( is_single() ) {
    if ($post->post_excerpt) {
      // 記事ページでは、記事本文から抜粋を取得
      $description = $post->post_excerpt;
    } else {
      // post_excerpt で取れない時は、自力で記事の冒頭100文字を抜粋して取得
      $description = strip_tags($post->post_content);
      $description = preg_replace('/\[.*\]/','',$description);
      $description = str_replace(array("\r\n","\r","\n","&nbsp;"),'',$description);
      $description = mb_substr($description, 0, 100) . "...";
    }
  } else if (is_post_type_archive()) {
    // 一覧ページでは、下記からを取得
    $description = '出版は単なるゴールではなく、企業の想いや専門性を伝えるためのスタート地点です。本ページでは、実際に書籍を通じてブランド力や信頼性を向上させ、売上や採用活動に繋げた事例など、企業出版がどのように事業成長に寄与するのかをお伝えします。';
  } else {
    ;
  }
  $description = '<meta name="description" content="'.$description.'">' . "\n\n";
    echo $description;
}
add_action('wp_head','get_meta_description');


/*********************
OGPタグ/Twitterカード設定を出力
*********************/
function my_meta_ogp() {
    global $post;
    $ogp_title = '';
    $ogp_descr = '';
    $ogp_url = '';
    $ogp_img = '';
    $insert = '';

    if ( is_page()) { //固定ページ
      $ogp_title = $post->post_title . ' | ' . get_bloginfo('name');
      $custom = get_post_custom();
      if(!empty( $custom['description'][0])) {
        $ogp_descr = $custom['description'][0];
      }
      $ogp_url = get_permalink();
    } elseif( is_singular() ) { //記事ページ
      $ogp_title = $post->post_title . ' | ' . get_bloginfo('name');
      $ogp_url = get_permalink();
      if ($post->post_excerpt) {
        // 記事ページでは、記事本文から抜粋を取得
        $ogp_descr = $post->post_excerpt;
      } else {
        // post_excerpt で取れない時は、自力で記事の冒頭100文字を抜粋して取得
        $ogp_descr = strip_tags($post->post_content);
        $ogp_descr = preg_replace('/\[.*\]/','',$ogp_descr);
        $ogp_descr = str_replace(array("\r\n","\r","\n","&nbsp;"),'',$ogp_descr);
        $ogp_descr = mb_substr($ogp_descr, 0, 100) . "...";
      }
   } elseif ( is_front_page() || is_home() ) { //TOPページ
      $ogp_title = get_bloginfo('name');
      $ogp_descr = get_bloginfo('description');
      $ogp_url = home_url();
   } elseif ( is_post_type_archive()) { //アーカイブページ
    //  $ogp_title = `事例紹介 | ` . get_bloginfo('name');
     $post_type = get_queried_object();
     $ogp_title = esc_attr($post_type->label).' | ' . get_bloginfo('name');
     $ogp_descr = '出版は単なるゴールではなく、企業の想いや専門性を伝えるためのスタート地点です。本ページでは、実際に書籍を通じてブランド力や信頼性を向上させ、売上や採用活動に繋げた事例など、企業出版がどのように事業成長に寄与するのかをお伝えします。';
     $ogp_url = get_permalink();
  }
    //og:type
    $ogp_type = ( is_front_page() || is_home() ) ? 'website' : 'article';

    //出力するOGPタグをまとめる
    $insert .= '<meta property="og:title" content="'.esc_attr($ogp_title).'" />' . "\n";
    $insert .= '<meta property="og:description" content="'.esc_attr($ogp_descr).'" />' . "\n";
    $insert .= '<meta property="og:type" content="'.$ogp_type.'" />' . "\n";
    $insert .= '<meta property="og:url" content="'.esc_url($ogp_url).'" />' . "\n";
    if(is_page('corporate-publishing')){
      $insert .= '<meta property="og:image" content="https://bookdam.jp/asset/img/publishing/img_thum01.webp" />' . "\n";
    }else{
      $insert .= '<meta property="og:image" content="'.home_url('asset/img/common/ogp.jpg').'" />' . "\n";
    }
    $insert .= '<meta property="og:site_name" content="'.esc_attr(get_bloginfo('name')).'" />' . "\n";
    $insert .= '<meta name="twitter:card" content="summary_large_image" />' . "\n";
    $insert .= '<meta property="og:locale" content="ja_JP" />' . "\n";

    echo $insert;
}
add_action('wp_head','my_meta_ogp');//headにOGPを出力


/*********************
scriptタグ出力
*********************/
function my_script_load(){
  // wp_deregister_script('jquery');
  // wp_enqueue_script('jQuery', 'https://code.jquery.com/jquery-3.3.1.min.js', array());
  wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js', array());
  wp_enqueue_script('scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js', array());
  wp_enqueue_script('loopslider', 'https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js', array());
  wp_enqueue_script('splide', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', array());
  wp_enqueue_script('lenis', 'https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.19/bundled/lenis.min.js', array());
	if ( is_home() || is_front_page() ) :
    wp_enqueue_script('top', home_url('asset/js/top.js'), array());
  elseif (is_page('features')) :
    wp_enqueue_script('features', home_url('asset/js/features.js'), array());
  elseif (is_page('contact') || is_page('thanks') || is_page('document')) :
    wp_enqueue_script('contact', home_url('asset/js/contact.js'), array());
  elseif (is_page('faq')) :
    wp_enqueue_script('faq', home_url('asset/js/faq.js'), array());
  elseif (is_page('corporate-publishing')) :
    wp_enqueue_script('corporate-publishing', home_url('asset/js/corporate-publishing.js'), array());
  elseif (is_page('entry')) :
    wp_enqueue_script('entry', home_url('asset/js/entry.js'), array());
  elseif (is_page('company')) :
    wp_enqueue_script('company', home_url('asset/js/company.js'), array());
  elseif (is_page('service')) :
    wp_enqueue_script('service', home_url('asset/js/service.js'), array());
  elseif (is_page('facilities-factories')) :
    wp_enqueue_script('facilities-factories', home_url('asset/js/facilities-factories.js'), array());
  elseif (is_page('number')) :
    wp_enqueue_script('number', home_url('asset/js/number.js'), array());
  elseif (is_page('message')) :
    wp_enqueue_script('message', home_url('asset/js/message.js'), array());
    elseif(is_page('reform')||is_page('attracting')||is_page('handyman')||is_page('franchise')):
      wp_enqueue_script('business_single', home_url('asset/js/business_single.js'), array());
    elseif(is_page('talk01')||is_page('talk02')):
      wp_enqueue_script('talk_single', home_url('asset/js/talk_single.js'), array());
  endif;
	wp_enqueue_script('base', home_url('asset/js/common.js'), array());


}
add_action('wp_footer','my_script_load');


/*********************
CSS出力
*********************/
function add_style_sheet(){
  if (have_posts()) :
    global $post;
    if(is_page()) :
      $parent_id = $post->post_parent;
      $slug = get_post($parent_id)->post_name;
    elseif (is_archive() || is_single() || is_tax()) :
      $slug = get_post_type( $post );
    endif;
  endif;


  wp_enqueue_style('splide', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css');
  if ( is_home() || is_front_page() ) :
  	wp_enqueue_style('allstyle', home_url('asset/css/top/style.css?'.date('Ymd-Hi')));
  elseif (is_post_type_archive('case') || is_tax('result_category')) :
    wp_enqueue_style('casestyle', home_url('asset/css/case/style.css'));
  elseif (is_404()) :
    wp_enqueue_style('contactstyle', home_url('asset/css/other/style.css'));
  elseif (is_page('brand')) :
    wp_enqueue_style('brandstyle', home_url('asset/css/brand/style.css'));
  elseif(is_post_type_archive('member')):
    wp_enqueue_style('memberstyle', home_url('asset/css/member/style.css'));
  elseif(is_singular('member')):
    wp_enqueue_style('member_singlestyle', home_url('asset/css/member_single/style.css'));
  elseif(is_page('confirm') || is_page('thanks') || is_page('document')):
    wp_enqueue_style('contact_style', home_url('asset/css/contact/style.css'));
  elseif(is_page('reform')||is_page('attracting')||is_page('handyman')||is_page('franchise')):
    wp_enqueue_style('business_singlestyle', home_url('asset/css/business_single/style.css'));
  elseif(is_page('talk01')||is_page('talk02')):
    wp_enqueue_style('talk_singlestyle', home_url('asset/css/talk_single/style.css'));
  else :
    wp_enqueue_style('articlestyle', home_url('asset/css/'.$slug.'/style.css?'.date('Ymd-Hi')));
  endif;
}
add_action('wp_enqueue_scripts', 'add_style_sheet');

//パンくず
function breadcrumb(){
  global $post;
  $str ='';
  $pNum = 2;

  $str.= '<ol class="flx" itemprop="Breadcrumb" itemscope itemtype="http://data-vocabulary.org/BreadcrumbList">';
  $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="'.home_url('/').'" class="home"><span itemprop="name">TOP</span></a><span class="slash"></span><meta itemprop="position" content="1"></li>';


  /* 通常の投稿ページ */
  if(is_singular('post')){
    $categories = get_the_category($post->ID);
    $cat = $categories[0];

    if($cat->parent != 0){
      $ancestors = array_reverse(get_ancestors($cat->cat_ID, 'category'));
      foreach($ancestors as $ancestor){
        $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="'. get_category_link($ancestor).'"><span itemprop="name">'.get_cat_name($ancestor).'</span></a><span class="slash">></span><meta itemprop="position" content="'.$pNum.'"></li>';
        $pNum++;
      }
    }
    $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="'. get_category_link($cat-> term_id). '"><span itemprop="name">'. $cat-> cat_name . '</span></a><span class="slash">></span><meta itemprop="position" content="'.$pNum.'"></li>';
    $pNum++;
    $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">'.$post->post_title.'</span><meta itemprop="position" content="'.$pNum.'"></li>';
  }

  /* カスタムポスト */
  elseif(is_single() && !is_singular('post')){
    $cp_name = get_post_type_object(get_post_type())->label;
    $cp_url = home_url('/').get_post_type_object(get_post_type())->name;
    $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="'.$cp_url.'"><span itemprop="name">'.$cp_name.'</span></a><span class="slash">></span><meta itemprop="position" content="2"></li>';
    $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">'.$post->post_title.'</span><meta itemprop="position" content="3"></li>';
  }

  /* 固定ページ */
  elseif(is_page()){
    $pNum = 2;
    if($post->post_parent != 0){
      $ancestors = array_reverse(get_post_ancestors($post->ID));
      foreach($ancestors as $ancestor){
        $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="'. get_permalink($ancestor).'"><span itemprop="name">'.get_the_title($ancestor).'</span></a><span class="slash">></span><meta itemprop="position" content="'.$pNum.'"></li>';
        $pNum++;
      }
    }
    $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">'. $post->post_title.'</span><meta itemprop="position" content="'.$pNum.'"></li>';
  }

  /* カテゴリページ */
  elseif(is_category()) {
    $cat = get_queried_object();
    $pNum = 2;
    if($cat->parent != 0){
      $ancestors = array_reverse(get_ancestors($cat->cat_ID, 'category'));
      foreach($ancestors as $ancestor){
        $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="'. get_category_link($ancestor) .'"><span itemprop="name">'.get_cat_name($ancestor).'</span></a><span class="slash">></span><meta itemprop="position" content="'.$pNum.'"></li>';
      }
    }
    $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">'.$cat->name.'</span><meta itemprop="position" content="'.$pNum.'"></li>';
  }

  /* タグページ */
  elseif(is_tag()){
    $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">'. single_tag_title( '' , false ). '</span><meta itemprop="position" content="2"></li>';
  }

  /* 時系列アーカイブページ */
  elseif(is_date()){

    if(get_query_var('day') != 0){
      $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="'. get_year_link(get_query_var('year')).'"><span itemprop="name">'.get_query_var('year').'年</span></a><span class="slash">></span><meta itemprop="position" content="2"></li>';
      $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="'. get_month_link(get_query_var('year'), get_query_var('monthnum')).'"><span itemprop="name">'.get_query_var('monthnum').'月</span></a><span class="slash">></span><meta itemprop="position" content="3"></li>';
      $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">'.get_query_var('day'). '</span>日<meta itemprop="position" content="4"></li>';
    } elseif(get_query_var('monthnum') != 0){
      $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">'.get_query_var('year').'年</span><meta itemprop="position" content="2"></li>';
      $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">'.get_query_var('monthnum'). '</span>月<meta itemprop="position" content="3"></li>';
    } else {
      $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">'.get_query_var('year').'年</span><meta itemprop="position" content="2"></li>';
    }
  }

  /* 投稿者ページ */
  elseif(is_author()){
    $str .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">投稿者 : '. get_the_author_meta('display_name', get_query_var('author')).'</span><meta itemprop="position" content="2"></li>';
  }

  /* 添付ファイルページ */
  elseif(is_attachment()){
    $pNum = 2;
    if($post -> post_parent != 0 ){
      $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="'.get_permalink($post-> post_parent).'"><span itemprop="name">'.get_the_title($post->post_parent).'</span></a><span class="slash">></span><meta itemprop="position" content="'.$pNum.'"></li>';
      $pNum++;
    }
    $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">'.$post->post_title.'</span><meta itemprop="position" content="'.$pNum.'"></li>';
  }

  /* 検索結果ページ */
  elseif(is_search()){
    $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">「'.get_search_query().'」で検索した結果</span><meta itemprop="position" content="2"></li>';
  }

  /* 404 Not Found ページ */
  elseif(is_404()){
    $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">お探しの記事は見つかりませんでした。</span><meta itemprop="position" content="2"></li>';
  }

  /* その他のページ */
  else{
    $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">'.wp_title('', false).'</span><meta itemprop="position" content="2"></li>';
  }

  $str.= '</ol>';
  echo $str;
}