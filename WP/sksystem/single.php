<?php get_header(); ?>

<?php
$cat = get_the_category();
if ( $cat[0]->parent ) {
  // 親カテゴリーのデータを取得
  $parent_cat = get_category( $cat[0]->parent );
  $cat_name =  $parent_cat->name;
  $cat_slug = $parent_cat->slug;
}else{
  $cat_name = $cat[0]->cat_name;
  $cat_slug = $cat[0]->category_nicename;
}



$mv_file = "news";
if($cat_slug == "construction"){
  $mv_file = "state";
}else if($cat_slug == "magazine" || $cat_slug == "saga" || $cat_slug == "fukuoka"){
  $mv_file = "magazine";
}else{
  $cat_name = "最新情報";
  $cat_slug = "news";
}


?>

  <main id="main">
    <article>
      <section class="mv">
        <div class="mv__img">
          <picture>
            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/images/news/sp/mv.png">
            <img src="<?php bloginfo('template_directory'); ?>/images/<?php echo $mv_file; ?>/mv.png" alt="MV" loading="lazy">
          </picture>
        </div>
        <div class="mv__txt">
          <h1>
            <span class="ja"><?php echo $cat_name; ?></span>
            <span class="en">
              <picture>
                <img src="<?php bloginfo('template_directory'); ?>/images/<?php echo $mv_file; ?>/mv_en.png" alt="New" loading="lazy">
              </picture>
            </span>
          </h1>
        </div>

        <ul class="breadcrumb">
          <li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></li>
          <li class="home"><a href="<?php echo esc_url( home_url($cat_slug) ); ?>"><span class="arrow">&gt;</span><?php echo $cat_name; ?></a></li>
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
