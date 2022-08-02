<?php get_header(); ?>
  <main id="main" <?php if(is_page('line') ){echo "class='page-line'";} elseif(is_page('qa')){ echo "class='page-faq'"; }; ?>>
    <article>
      <section class="mv">
        <div class="mv__img">
          <picture>
            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/images/<?php echo $post->post_name; ?>/sp/mv.png">
            <img src="<?php bloginfo('template_directory'); ?>/images/<?php echo $post->post_name; ?>/mv.png" alt="MV" loading="lazy">
          </picture>
        </div>
        <!-- /.mv__img -->

        <div class="mv__txt">
          <h1>
            <span class="ja"><?php the_title(); ?></span>
            <span class="en">
              <picture>
                <img src="<?php bloginfo('template_directory'); ?>/images/<?php echo $post->post_name; ?>/mv_en.png" alt="<?php the_title(); ?>" loading="lazy">
              </picture>
            </span>
          </h1>
        </div>
        <!-- /.mv__txt -->
        <ul class="breadcrumb">
          <li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></li>
          <li class="crrent"><span class="arrow">&gt;</span><?php the_title(); ?></li>
        </ul>
      </section>
<?php the_content(); ?>
    </article>
  </main>

      
<?php get_footer(); ?>