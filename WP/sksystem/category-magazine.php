<?php get_header(); ?>
  <main id="main">
    <article>
      <section class="mv">
        <div class="mv__img">
          <picture>
            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/images/magazine/sp/mv.png">
            <img src="<?php bloginfo('template_directory'); ?>/images/magazine/mv.png" alt="MV" loading="lazy">
          </picture>
        </div>

        <div class="mv__txt">
          <h1>
            <span class="ja">マガジン一覧</span>
            <span class="en">
              <picture>
                <img src="<?php bloginfo('template_directory'); ?>/images/magazine/mv_en.png" alt="マガジン一覧" loading="lazy">
              </picture>
            </span>
          </h1>
        </div>
        <ul class="breadcrumb">
          <li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></li>
          <li class="crrent"><span class="arrow">&gt;</span>マガジン一覧</li>
        </ul>
      </section>

      <section class="magazineBlock__01">
        <div class="wrap">
          <div class="scrollin" data-wow-offset="200">
            <div class="magazinetop__img">
              <picture>
                <img src="<?php bloginfo('template_directory'); ?>/images/magazine/magazine_img01.jpg" alt="ぐーるぐるマガジン" loading="lazy">
              </picture>
            </div>
            <div class="magazineBlock_catWrap">
              <p class="cat_ttl">カテゴリーで絞り込む</p>
              <div class="cat_btn">
                <a href="saga/">佐賀ぐーるぐる</a>
              </div>
              <div class="cat_btn">
                <a href="fukuoka/">福岡ぐーるぐる</a>
              </div>
            </div>
          </div>
        </div>
      </section>

<?php if ( have_posts() ): ?>
      <section class="magazineBlock__02">
        <div class="wrap">
          <p class="magazine-count scrollin" data-wow-offset="200">全21件</p>
          <ul class="magazine-list">

            <?php while ( have_posts() ) : the_post(); ?>
            <li class="scrollin-3col">
              <div class="magazine-list__wrap">
                <div class="magazine-list__img">
                  <a href="<?php the_permalink(); ?>">
                    <img src="<?php bloginfo('template_directory'); ?>/images/magazine/magazine_catimg01.jpg" alt="" loading="lazy">
                    <div class="magazine-list__date"><?php the_time( 'Y.m.d' ); ?></div>
                  </a>
                </div>
                <div class="magazine-list__txt">
<!--
                  <a href=""><div class="magazine-list__category">佐賀ぐーるぐる</div></a>
-->
<?php
  $categories = get_the_category();
  foreach( $categories as $category ){
    $cat_id = $category->term_id;
    $cat_child = get_term_children( $cat_id, 'category' );
    if( !$cat_child ){
      echo '<a href="' . get_category_link( $cat_id ) . '"><div class="magazine-list__category">' . $category->name . '</div></a>';
      break;
    }
  }
?>


                  <a href="<?php the_permalink(); ?>">
                    <div class="magazine-list__ttl"><?php the_title(); ?></div>
                    <div class="magazine-list__excerpt">文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。</div>
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
