<?php get_header(); ?>
  <main id="main">
    <article>
      <section class="mv">
        <div class="mv__img">
          <picture>
            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/images/state/sp/mv.png">
            <img src="<?php bloginfo('template_directory'); ?>/images/state/mv.png" alt="MV" loading="lazy">
          </picture>
        </div>

        <div class="mv__txt">
          <h1>
            <span class="ja">施工中の様子</span>
            <span class="en">
              <picture>
                <img src="<?php bloginfo('template_directory'); ?>/images/state/mv_en.png" alt="施工中の様子" loading="lazy">
              </picture>
            </span>
          </h1>
        </div>
        <ul class="breadcrumb">
          <li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></li>
          <li class="crrent"><span class="arrow">&gt;</span>施工中の様子</li>
        </ul>
      </section>

      <section class="stateBlock__01">
        <div class="wrap">
          <div class="scrollin" data-wow-offset="200">
            <div class="statetop__img">
              <picture>
                <img src="<?php bloginfo('template_directory'); ?>/images/state/state_img01.jpg" alt="施工中の様子" loading="lazy">
              </picture>
            </div>
          </div>
        </div>
      </section>

<?php if ( have_posts() ): ?>
      <section class="stateBlock__02">
        <div class="wrap">
          <p class="state-count scrollin" data-wow-offset="200">全21件</p>
          <ul class="state-list">

<?php while ( have_posts() ) : the_post(); ?>
            <li class="scrollin-3col">
              <div class="state-list__wrap">
                <div class="state-list__img">
                  <a href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('thumbnail'); ?>
                    <?php else : ?>
                      <img src="<?php bloginfo('template_directory'); ?>/images/case/dummy.jpg" alt="" loading="lazy">
                    <?php endif ; ?>
                    <div class="state-list__date"><?php the_time( 'Y.m.d' ); ?></div>
                  </a>
                </div>
                <div class="state-list__txt">
                  <a href="<?php the_permalink(); ?>">
                    <div class="state-list__ttl"><?php the_title(); ?></div>

<?php
    // 投稿テキストを取得する
    $content = get_the_content();
    // HTMLタグをすべて取り除く
    $content = wp_strip_all_tags( $content );
    // ショートコードを取り除く
    $content = strip_shortcodes( $content );
?>

                    <div class="state-list__excerpt"><?php echo mb_substr($content,0,50).'...'; ?></div>
                  </a>
                </div>
              </div>
            </li>
<?php endwhile; ?>
          </ul>
            
        </div>
        <div class="pagenavi">
          <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
        </div>
      </section>
<?php endif; ?>
    </article>
  </main>
<?php get_footer(); ?>
