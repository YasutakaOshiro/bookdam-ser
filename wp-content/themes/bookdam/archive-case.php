<?php get_header(); ?>

<div id="contents" class="case">
    <section class="undermv">
        <h1 class="undermv__ttl anim">
            <span class="entxt enb">CASE</span>
            <span class="jp splittxt ttlAnim">事例紹介</span>
        </h1>
        <ul class="undermv__cvs">
            <li>
                <a href="<?php echo home_url('document/'); ?>" class="undermv_dlbtn">
                    <div class="undermv_dlbtn__wrap">
                        <div class="undermv_dlbtn__wrap--txt">資料ダウンロード</div>
                        <div class="undermv_dlbtn__wrap--icon"><img
                                src="<?php echo home_url('asset/img/common/svg_dl01.svg'); ?>" alt=""></div>
                    </div>
                </a>
            </li>
            <li>
                <a href="<?php echo home_url('contact/'); ?>" class="undermv_ctbtn">
                    <div class="undermv_ctbtn__wrap">
                        <div class="undermv_ctbtn__wrap--txt">まずは相談してみる</div>
                        <div class="undermv_ctbtn__wrap--icon"><img
                                src="<?php echo home_url('asset/img/common/svg_contact01.svg'); ?>" alt=""></div>
                    </div>
                </a>
            </li>
        </ul>
    </section>
    <div class="bread">
        <?php breadcrumb(); ?>
    </div>
    <section class="common__head">
        <h2 class="common__head--ttl">本を通して、<span class="blue">ファンが生まれる。</span><br>ブックダムの<span class="blue">伴走支援事例</span>を<br class="sp">ご紹介</h2>
        <p class="lead">出版は単なるゴールではなく、企業の想いや専門性を伝えるためのスタート地点です。<br class="pc">本ページでは、実際に書籍を通じてブランド力や信頼性を向上させ、売上や採用活動に繋げた事例など、<br class="pc">企業出版がどのように事業成長に寄与するのかをお伝えします。ブックダムのサービスに興味をお持ちの方は、ぜひご覧ください。</p>
    </section>
    <section class="case__search">
        <h2 class="common_bookttl">
            <span class="enb entxt">SEARCH FOR CASE</span>
            <span class="jp">事例をさがす</span>
        </h2>
        <div class="search__box">
            <h3 class="search__box--ttl">成果からさがす</h3>
            <ul class="search__box--category">
                <?php
                    $terms = get_terms(array(
                        'taxonomy' => 'result_category',
                        'hide_empty' => true,
                    ));
                    if (!empty($terms) && !is_wp_error($terms)) {
                        foreach ($terms as $term) {
                            echo '<li><a href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name) . '</a></li>';
                        }
                    }
                ?>
            </ul>
        </div>
    </section>
    <section class="case__archive">
        <ul class="archive__list">
            <?php
                $args = array(
                    'post_type' => 'case',
                    'posts_per_page' => 9,
                );
                $case_query = new WP_Query($args);
                if ($case_query->have_posts()) :
                    while ($case_query->have_posts()) : $case_query->the_post();
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
                    endif;
            ?>
        </ul>
        <div class="navi">
              <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>