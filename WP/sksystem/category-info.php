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
          <li class="crrent"><span class="arrow">&gt;</span>最新情報</li>
        </ul>
      </section>

      <section class="sub_first news__sec01">
        <div class="wrap">
          
          <div class="scrollin" data-wow-offset="200">
            <div class="news__category">
              <h3 class="news__category__head">カテゴリーで絞り込む</h3>
              <ul class="news__category__list">
<!--
                <li><a href="#">お知らせ</a></li>
                <li><a href="#">新築・リフォーム</a></li>
-->
<?php
  $categories = get_categories();
  foreach($categories as $category) {
    if( $category->slug=='event' || $category->slug=='blog' || $category->slug=='cate_news' ){
      echo '<li><a href="'.get_category_link($category->term_id).'">'.$category->name.'</a></li>';
    }
  }
?>

              </ul>
            </div>
          </div>

<?php if ( have_posts() ): ?>

          <ul class="post-list scrollin" data-wow-offset="200">
            <?php while ( have_posts() ) : the_post(); ?>
            <li>
              <a href="<?php the_permalink(); ?>">
                <div class="post-list__info">
                  <time><?php the_time( 'Y.m.d' ); ?></time>
                  <ul class="post-list__category">
<?php
  $categories = get_the_category();
  foreach( $categories as $category ) {
    echo '<li>'.$category->name.'</li>';
  }
?>
                  </ul>
                </div>
                <p><?php the_title(); ?></p>
              </a>
            </li>
            <?php endwhile; ?>
          </ul>
          <div class="pagenavi">
            <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
          </div>
        </div>
      </section>

<?php endif; ?>

    </article>
  </main>
<?php get_footer(); ?>
