<?php get_header(); ?>

<div id="contents" class="blog">
    <section class="under_mv">
        <h2 class="under_mv_ttl">
            <span class="en sc_fade_y">BLOG</span>
            <span class="jp txt_y"><span>SIUブログ</span></span>
        </h2>
        <div class="var_txt">
          <span class="en">ACTIVATES THE HAPPINESS</span>
          <span class="line"></span>
          <span class="en">WITH UP!</span>
        </div>
    </section>
    <div class="blog_wrap mv_next">
        <div class="category_area fade_y">
            <h3 class="category_area_ttl en">CATEGORY</h3>
            <ul class="info_cat_list">
                <li class="current"><a href="<?php echo home_url('blog/'); ?>" class="current">ALL</a></li>
                <?php
            $terms = get_terms('blog_category');
            foreach( $terms as $term ):
            $name = $term->name;
            $slug = $term->slug;
            $term_link = get_term_link($term);
            if ( is_wp_error( $term_link ) ) {
            continue;
            }
            echo '<li><a class="" href="'.esc_url($term_link).'">'.$name.'</a></li>';
            endforeach;
        ?>
            </ul>
        </div>
        <div class="blog_area">
      <div class="contents new_contents">
        <div class="new_article">
            <?php
            $args = array(
                'post_type'=>'blog',
                'posts_per_page'=> 2,
                'order' => 'DESC',
                'orderby' => 'date',
                'paged' => $paged,
            );
            $wp_query = new WP_Query( $args );
            if ( $wp_query->have_posts() ) :
                while ( $wp_query->have_posts() ) : $wp_query->the_post();
            ?>
            <a href="<?php the_permalink(); ?>" class="blog_box fade_y">
              <div class="thumb blog_img">
                <?php if(has_post_thumbnail()): ?>
                  <?php the_post_thumbnail( 'full' ); ?>
                  <?php elseif(first_image()): ?>
                  <img src="<?php echo first_image(); ?>" alt="<?php the_title(); ?>">
                  <?php else : ?>
                  <img src="<?php echo home_url('asset/img/common/blog-thumbnail-default.webp'); ?>"
                  alt="<?php the_title(); ?>">
                <?php endif ; ?>
                <div class="hover__txt">
                  <span class="inner__txt en">
                    MORE
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_2204_4579)">
                        <path d="M0 12.6724L10.7807 1.89267H2.2472V0H14V12.2835H12.1078V3.21971L1.32709 14L0 12.6724Z"
                          fill="#FBFBFB" />
                      </g>
                      <defs>
                        <clipPath id="clip0_2204_4579">
                          <rect width="14" height="14" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                  </span>
                </div>
              </div>
              <div class="txt_area">
                <div class="txt_area_info">
                  <div class="category">
                    <div class="category_name">
                      <?php
                          $terms = get_the_terms($post_id,"blog_category");
                          foreach ($terms as $term) {
                          $slug = $term->slug;
                          $name = $term->name;
                          echo '<span class="tag '.$slug.'">'.$name.'</span>';
                          }
                      ?>
                    </div>
                  </div>
                  <time class="fade_y date en02"><?php the_time("Y.m.d"); ?></time>
                </div>
                <h3 class="blog_title fade_y"><?php the_title(); ?></h3>
                <p class="blog_lead fade_y">
                    <?php
                        if(mb_strlen($post->post_content, 'UTF-8')>150){
                            $content= mb_substr(strip_tags($post->post_content), 0, 150, 'UTF-8');
                            echo $content.'……';
                        }else{
                            echo strip_tags($post->post_content);
                        }
                    ?>
                </p>
              </div>
            </a>
            <?php endwhile; ?>
            <?php else : ?>
            <?php endif;?>
            <?php wp_reset_query(); ?>
        </div>
      </div>
      <div class="contents arc_contents">
        <div class="arc_article">
            <?php
            $args = array(
                'post_type'=>'blog',
                'posts_per_page'=> 9,
                'order' => 'DESC',
                'orderby' => 'date',
                'offset' => 2,
                'paged' => $paged,
            );
            $wp_query = new WP_Query( $args );
            if ( $wp_query->have_posts() ) :
                while ( $wp_query->have_posts() ) : $wp_query->the_post();
            ?>
            <a href="<?php the_permalink(); ?>" class="blog_box fade_y">
              <div class="thumb blog_img">
                <?php if(has_post_thumbnail()): ?>
                  <?php the_post_thumbnail( 'full' ); ?>
                  <?php elseif(first_image()): ?>
                  <img src="<?php echo first_image(); ?>" alt="<?php the_title(); ?>">
                  <?php else : ?>
                  <img src="<?php echo home_url('asset/img/common/blog-thumbnail-default.webp'); ?>"
                  alt="<?php the_title(); ?>">
                <?php endif ; ?>
                <div class="hover__txt">
                  <span class="inner__txt en">
                    MORE
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_2204_4579)">
                        <path d="M0 12.6724L10.7807 1.89267H2.2472V0H14V12.2835H12.1078V3.21971L1.32709 14L0 12.6724Z"
                          fill="#FBFBFB" />
                      </g>
                      <defs>
                        <clipPath id="clip0_2204_4579">
                          <rect width="14" height="14" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                  </span>
                </div>
              </div>
              <div class="txt_area">
                <div class="txt_area_info">
                  <div class="category">
                    <div class="category_name">
                      <?php
                          $terms = get_the_terms($post_id,"blog_category");
                          foreach ($terms as $term) {
                          $slug = $term->slug;
                          $name = $term->name;
                          echo '<span class="tag '.$slug.'">'.$name.'</span>';
                          }
                      ?>
                    </div>
                  </div>
                  <time class="fade_y date en02"><?php the_time("Y.m.d"); ?></time>
                </div>
                <h3 class="blog_title fade_y"><?php the_title(); ?></h3>
              </div>
            </a>
            <?php endwhile; ?>
            <div class="navi fade_y">
              <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
            </div>
            <?php else : ?>
            <?php endif;?>
            <?php wp_reset_query(); ?>
        </div>
      </div>
    </div>
    </div>

</div>

<?php get_footer(); ?>