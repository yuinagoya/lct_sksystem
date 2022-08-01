<?php get_header(); ?>

  <main id="main">
    <article>
      <section class="mv">
        <div class="mv__img">
          <picture>
            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/images/news/sp/mv.png">
            <img src="<?php bloginfo('template_directory'); ?>/images/news/mv.png" alt="MV" loading="lazy">
          </picture>
        </div>
        <div class="mv__txt">
          <h1>
            <span class="ja">最新情報</span>
            <span class="en">
              <picture>
                <img src="<?php bloginfo('template_directory'); ?>/images/news/mv_en.png" alt="New" loading="lazy">
              </picture>
            </span>
          </h1>
        </div>

        <ul class="breadcrumb">
          <li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></li>
          <li class="home"><a href="<?php echo esc_url( home_url( '/news/' ) ); ?>"><span class="arrow">&gt;</span>最新情報</a></li>
          <li class="crrent"><span class="arrow">&gt;</span><?php the_title(); ?></li>
        </ul>
      </section>

      <section class="single">
        <div class="wrap">
          <h1><?php the_title(); ?></h1>
          <time class="post-date"><?php the_time('Y年m月d日'); ?></time>
          <div class="post-content">
            <?php the_content(); ?>
          </div>
        </div>
      </section>
    </article>
  </main>
<?php get_footer(); ?>
