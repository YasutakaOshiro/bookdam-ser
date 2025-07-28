
<?php get_header(); ?>
<div id="contents" class="case_single">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section class="case_single__mv">
        <div class="mv__imgbox">
            <img src="<?php the_field("img_book") ?>" alt="">
        </div>
        <div class="mv__txtbox">
            <ul class="mv__txtbox--categorylist">
                <!-- <li>プロデュース</li>
                <li>売上・集客</li>
                <li>BtoB</li>
                <li>従業員数~50名</li> -->
                <?php
                    $categories = get_the_terms(get_the_ID(), 'result_category');
                    if ($categories && !is_wp_error($categories)) {
                        foreach ($categories as $category) {
                            echo '<li>' . esc_html($category->name) . '</li>';
                        }
                    }
                ?>
                <?php
                    $categories = get_the_terms(get_the_ID(), 'target_category');
                    if ($categories && !is_wp_error($categories)) {
                        foreach ($categories as $category) {
                            echo '<li>' . esc_html($category->name) . '</li>';
                        }
                    }
                ?>
                <?php
                    $categories = get_the_terms(get_the_ID(), 'employees_category');
                    if ($categories && !is_wp_error($categories)) {
                        foreach ($categories as $category) {
                            echo '<li>' . esc_html($category->name) . '</li>';
                        }
                    }
                ?>
            </ul>
            <h1 class="mv__txtbox--ttl"><?php the_title() ?></h1>
            <div class="mv__txtbox--name">
                <?php
                    $chosha = get_field('chosha');
                    if ($chosha) {
                        echo esc_html($chosha);
                    }
                ?>
            </div>
        </div>
    </section>
    <div class="case_single__wrap">
        <?php 
            $img_main = get_field('img_main');
            if ($img_main) {
                echo '<div class="case_single__kv img_anim"><img src="' . $img_main . '" alt=""></div>';
            }
        ?>
        <section class="case_single__profile">
            <dl>
                <dt class="linettl">著者プロフィール</dt>
                <dd class="lead">
                    <?php
                        $profile = get_field('profile');
                        if ($profile) {
                            echo $profile;
                        }
                    ?>
                </dd>
            </dl>
        </section>
        <section class="case_single__summary">
            <dl class="commondl">
                <dt>出版の目的</dt>
                <dd>
                    <?php
                        $mokuteki = get_field('mokuteki');
                        if ($mokuteki) {
                            echo $mokuteki;
                        }
                    ?>
                </dd>
            </dl>
            <dl class="commondl">
                <dt>抱えていた課題</dt>
                <dd>
                    <?php
                        $kadai = get_field('kadai');
                        if ($kadai) {
                            echo $kadai;
                        }
                    ?>
                </dd>
            </dl>
            <dl class="commondl">
                <dt>出版で生まれた成果</dt>
                <dd>
                    <?php
                        $seika = get_field('seika');
                        if ($seika) {
                            echo $seika;
                        }
                    ?>
                </dd>
            </dl>
        </section>
        <?php if (get_field('reason')) : ?>
        <section class="case_single__commonbox">
            <h2 class="commonbox__ttl linettl">ブックダムに決めた理由</h2>
            <p class="commonbox__txt lead">
                <?php the_field('reason');?>
            </p>
        </section>
        <?php endif; ?>
        <div class="commoncv_short">
            <div class="commoncv_short__txtbox">
                <h2 class="commoncv_short__txtbox--ttl ttlAnim splittxt">読者は御社のファンになる</h2>
                <p class="lead">ブックダムは御社の<br class="sp">ビジョン実現のために<br class="pc">伴走いたします。</p>
            </div>
            <ul class="commoncv_short__cvs">
                <li>
                  <a href="<?php echo home_url('document/'); ?>" class="commoncv_short_dlbtn">
                    <div class="commoncv_short_dlbtn__wrap">
                      <div class="commoncv_short_dlbtn__wrap--txt">資料DL</div>
                      <div class="commoncv_short_dlbtn__wrap--icon"><img src="<?php echo home_url('asset/img/common/svg_dl01.svg'); ?>" alt=""></div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="<?php echo home_url('contact/'); ?>" class="commoncv_short_ctbtn">
                    <div class="commoncv_short_ctbtn__wrap">
                      <div class="commoncv_short_ctbtn__wrap--txt">まずは相談してみる</div>
                      <div class="commoncv_short_ctbtn__wrap--icon"><img src="<?php echo home_url('asset/img/common/svg_contact01.svg'); ?>" alt=""></div>
                    </div>
                  </a>
                </li>
              </ul>
        </div>
        <?php if (get_field('kadai_detail')) : ?>
        <section class="case_single__commonbox">
            <h2 class="commonbox__ttl linettl">出版で解決(解消)したかった課題</h2>
            <p class="commonbox__txt lead">
                <?php the_field('kadai_detail');?>
            </p>
        </section>
        <?php endif; ?>
        <?php if (get_field('point_ttl01')) : ?>
        <section class="case_single__point">
            <h2 class="point__ttl underlinettl">ブックダムのこだわりポイント</h2>
            <div class="point__wrap">
                <dl>
                    <dt>
                        <?php the_field('point_ttl01'); ?>
                    </dt>
                    <dd>
                        <?php the_field('point01'); ?>
                    </dd>
                </dl>
                <?php if (get_field('point_ttl02')) : ?>
                <dl>
                    <dt>
                        <?php the_field('point_ttl02'); ?>
                    </dt>
                    <dd>
                        <?php the_field('point02'); ?>
                    </dd>
                </dl>
                <?php endif; ?>
                <?php if (get_field('point_ttl03')) : ?>
                <dl>
                    <dt>
                        <?php the_field('point_ttl03'); ?>
                    </dt>
                    <dd>
                        <?php the_field('point03'); ?>
                    </dd>
                </dl>
                <?php endif; ?>
            </div>
        </section>
        <?php endif; ?>
        <?php if (get_field('seika_detail')) : ?>
        <section class="case_single__commonbox">
            <h2 class="commonbox__ttl linettl linettl">出版で生まれた成果</h2>
            <p class="commonbox__txt lead">
                <?php the_field('seika_detail');?>
            </p>
        </section>
        <?php endif; ?>
        <?php if (get_field('gallery')) : ?>
        <section class="case_single__gallery">
            <h2 class="gallery__ttl underlinettl">ギャラリー</h2>
            <div class="gallery__imgwrap">
                <!-- <div class="imgbox"><img src="<?php echo home_url('asset/img/case/img_gallery01.jpg'); ?>" alt=""></div>
                <div class="imgbox"><img src="<?php echo home_url('asset/img/case/img_gallery02.jpg'); ?>" alt=""></div>
                <div class="imgbox"><img src="<?php echo home_url('asset/img/case/img_gallery03.jpg'); ?>" alt=""></div>
                <div class="imgbox"><img src="<?php echo home_url('asset/img/case/img_gallery04.jpg'); ?>" alt=""></div>
                <div class="imgbox"><img src="<?php echo home_url('asset/img/case/img_gallery05.jpg'); ?>" alt=""></div> -->
                <?php the_field('gallery'); ?>
            </div>
        </section>
        <?php endif; ?>
        <?php if (get_field('voice_title')) : ?>
        <section class="case_single__voice">
            <h2 class="gallery__ttl underlinettl">お客様の声</h2>
            <div class="voice__box">
                <?php if( get_field('voice_img') ) : ?>
                <div class="voice__box--imgbox">
                    <img src="<?php the_field("voice_img") ?>" alt="">
                </div>
                <?php endif; ?>
                <dl class="voice__box--txtbox">
                    <dt>
                        <?php the_field('voice_title'); ?>
                    </dt>
                    <dd>
                        <?php the_field('voice_txt'); ?>
                    </dd>
                </dl>
            </div>
        </section>
        <?php endif; ?>
        <?php if (get_field('information')) : ?>
        <section class="case_single__info">
            <div class="info__imgbox"><img src="<?php the_field('img_book') ?>" alt=""></div>
            <div class="info__txtbox">
                <h2 class="info__txtbox--ttl linettl">書籍情報</h2>
                <p class="lead">
                    <?php the_field('information'); ?>
                </p>
                <?php if( get_field('amazon') || get_field('rakuten') ) : ?>
                <ul class="linklist">
                    <?php if( get_field('amazon') ) : ?>
                        <li><a href="<?php the_field('amazon');?>" target="_blank" class="type_amazon">Amazon</a></li>
                    <?php endif; ?>
                    <?php if(get_field('rakuten')): ?>
                        <li><a href="<?php the_field('rakuten');?>" target="_blank" class="type_rakuten">楽天市場</a></li>
                    <?php endif; ?>
                </ul>
                <?php endif; ?>
            </div>
        </section>
        <?php endif; ?>
        <?php endwhile; endif; ?>
        
        <?php
            $args = array(
                'post_type' => 'case',
                'posts_per_page' => 3,
                'post__not_in' => array(get_the_ID()),
                'orderby' => 'rand',
            );
            $other_cases = new WP_Query($args);
            if ($other_cases->have_posts()) :
        ?>
            <section class="case_single__other">
                <h2 class="other__ttl underlinettl">その他の事例</h2>
                <ul class="archive__list">
                <?php
                    while ($other_cases->have_posts()) : $other_cases->the_post();
                ?>
                <li>
                <a href="<?php the_permalink(); ?>" class="archive__list--link">
                    <div class="imgbox">
                        <?php
                            $img_main = get_field('img_main');
                            if ($img_main) {
                                echo '<img src="' . esc_url($img_main) . '" alt="">';
                            }else{
                                echo '<img src="' . esc_url(home_url('asset/img/case/default_case.jpg')) . '" alt="デフォルト画像">';
                            }
                        ?>
                    </div>
                    <div class="txtbox">
                        <div class="txtbox__name"><?php the_field('chosha'); ?></div>
                        <h2 class="txtbox__ttl">
                            <?php
                                $title = get_the_title();
                                echo mb_strlen($title) > 32
                                    ? mb_substr($title, 0, 32) . '...'
                                    : $title;
                            ?>
                        </h2>
                        <ul class="txtbox__categorylist">
                            <?php
                                $terms = get_the_terms(get_the_ID(), 'result_category');
                                if ($terms && !is_wp_error($terms)) {
                                    foreach ($terms as $term) {
                                        echo '<li>' . esc_html($term->name) . '</li>';
                                    }
                                }
                            ?>
                            <?php
                                $terms = get_the_terms(get_the_ID(), 'target_category');
                                if ($terms && !is_wp_error($terms)) {
                                    foreach ($terms as $term) {
                                        echo '<li>' . esc_html($term->name) . '</li>';
                                    }
                                }
                            ?>
                            <?php
                                $terms = get_the_terms(get_the_ID(), 'employees_category');
                                if ($terms && !is_wp_error($terms)) {
                                    foreach ($terms as $term) {
                                        echo '<li>' . esc_html($term->name) . '</li>';
                                    }
                                }
                            ?>
                        </ul>
                    </div>
                </a>
            </li>
                <?php
                        endwhile;
                        wp_reset_postdata();
                ?>
                <!-- <li>
                    <a href="" class="archive__list--link">
                        <div class="imgbox"><img src="<?php echo home_url('asset/img/case/img_case01.jpg'); ?>" alt=""></div>
                        <div class="txtbox">
                            <div class="txtbox__name">トゥモローゲート株式会社 大城 保貴</div>
                            <h2 class="txtbox__ttl">タイトルテキストを入れるタイトルテキストを入れるタイトルテキス...</h2>
                            <ul class="txtbox__categorylist">
                                <li>プロデュース</li>
                                <li>BtoB</li>
                                <li>従業員数〜10名</li>
                                <li>売上・集客</li>
                            </ul>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="archive__list--link">
                        <div class="imgbox"><img src="<?php echo home_url('asset/img/case/img_case01.jpg'); ?>" alt=""></div>
                        <div class="txtbox">
                            <div class="txtbox__name">トゥモローゲート株式会社 大城 保貴</div>
                            <h2 class="txtbox__ttl">タイトルテキストを入れるタイトルテキストを入れるタイトルテキス...</h2>
                            <ul class="txtbox__categorylist">
                                <li>プロデュース</li>
                                <li>BtoB</li>
                                <li>従業員数〜10名</li>
                                <li>売上・集客</li>
                            </ul>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="archive__list--link">
                        <div class="imgbox"><img src="<?php echo home_url('asset/img/case/img_case01.jpg'); ?>" alt=""></div>
                        <div class="txtbox">
                            <div class="txtbox__name">トゥモローゲート株式会社 大城 保貴</div>
                            <h2 class="txtbox__ttl">タイトルテキストを入れるタイトルテキストを入れるタイトルテキス...</h2>
                            <ul class="txtbox__categorylist">
                                <li>プロデュース</li>
                                <li>BtoB</li>
                                <li>従業員数〜10名</li>
                                <li>売上・集客</li>
                            </ul>
                        </div>
                    </a>
                </li> -->
            </ul>
            <a href="<?php echo home_url('case/'); ?>" class="basebtn">
                <span class="txt">事例一覧を見る</span>
                <span class="icon"><img src="<?php echo home_url('asset/img/common/ico_arrow01.svg'); ?>" alt=""></span>
            </a>
        </section>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>