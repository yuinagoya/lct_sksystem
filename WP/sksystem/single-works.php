<?php get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <main id="main">
    <article>
      <section class="mv">
        <div class="mv__img">
          <picture>
            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/images/case/sp/mv.png">
            <img src="<?php bloginfo('template_directory'); ?>/images/case/mv.png" alt="MV" loading="lazy">
          </picture>
        </div>
        <div class="mv__txt">
          <h1>
            <span class="ja">施工事例</span>
            <span class="en">
              <picture>
                <img src="<?php bloginfo('template_directory'); ?>/images/case/mv_en.png" alt="Case" loading="lazy">
              </picture>
            </span>
          </h1>
        </div>
        <ul class="breadcrumb">
          <li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></li>
          <li><span class="arrow">&gt;</span><a href="<?php echo esc_url( home_url( '/works/' ) ); ?>">施工事例</a></li>
          <li class="crrent"><span class="arrow">&gt;</span><?php the_title(); ?></li>
        </ul>
      </section>
<?php
  $taxonomy_terms_cat = wp_get_object_terms($post->ID, 'cate_works');
  $taxonomy_terms_cat_name = $taxonomy_terms_cat[0]->name; //ターム名
  $caption = get_field('area');
  $caption = $caption.get_field('caption');
?>
      <section class="sub_first case-single__sec01">
        <div class="wrap">
          <div class="scrollin" data-wow-offset="200">
            <div class="case-single__head">
              <p class="case-single__case">CASE<span><?php echo $caption; ?></span></p>
              <h2 class="case-single__ttl"><?php the_title(); ?></h2>
              <div class="flex-block">
                <ul class="case-list__category">
                  <li><a href="#"><?php echo $taxonomy_terms_cat_name; ?></a></li>
                </ul>
                <ul class="case-single__sns-list">
                  <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/case/ico_fb.png" alt="facebook" loading="lazy"></a></li>
                  <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/case/ico_tw.png" alt="twitter" loading="lazy"></a></li>
                  <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/case/ico_ln.png" alt="line" loading="lazy"></a></li>
                </ul>
              </div>
            </div>
            <div class="case-single__img">
              <picture>
<!--
                <img src="<?php bloginfo('template_directory'); ?>/images/case/img01.png" alt="" loading="lazy">
-->

<?php
  $image = get_field('wkImg00');

  if(is_array($image)){
    $src= $image['url'];
  }else{
    $src = wp_get_attachment_image_src( $image, 'large' )[0];
  }

  if (is_null($src)){
    $src = get_bloginfo('template_directory');
    $src = $src."/images/case/dummy.jpg";
  }
?>
                <img src="<?php echo $src; ?>" alt="Case" loading="lazy">
              </picture>
            </div>
          </div>
        </div>
      </section>

      <section class="case-single__sec02">
        <div class="wrap">
          <div>
            <div class="flex-block">
              <div class="case-single__date">
                <h3>DATE</h3>
                <dl class="date-list">
                  <dt>内容</dt>
                  <dd><?php the_field('wkSum02'); ?></dd>
<!--
                  <dt>工事費</dt>
                  <dd>約600万円</dd>
-->
                  <dt>工期</dt>
                  <dd><?php the_field('wkSum04'); ?></dd>
                  <dt>地域</dt>
                  <dd><?php the_field('area'); ?></dd>
                </dl>
              </div>
              <div class="case-single__material">
                <h3>MATERIAL</h3>
                <dl class="date-list">
                  <?php the_field('remarks'); ?>
                </dl>
              </div>
            </div>
            <div class="case-single__tag">
              <ul class="case-list__tag">
                <!--
                <li><a href="#">北欧</a></li>
                <li><a href="#">女性がつかいやすいキッチン</a></li>
                <li><a href="#">収納多め</a></li>
                -->
                <?php echo get_the_term_list($post->ID,'tag_works','',' | '); ?>
              </ul>
            </div>

          </div>
        </div>
      </section>

      <section class="case-single__sec03">
        <div class="wrap">
          <div class="scrollin" data-wow-offset="200">
<?php
  $before_src = null;
  $after_src = null;
  $before_image = get_field('wkImgL01');
  if(is_array($before_image)){
    $before_src = $before_image['url'];
  }else{
    $before_src = wp_get_attachment_image_src( $before_image, 'large' )[0];
  }
  $after_image = get_field('wkImgR01');
  if(is_array($after_image)){
    $after_src= $after_image['url'];
  }else{
    $after_src = wp_get_attachment_image_src( $after_image, 'large' )[0];
  }
?>
<?php if( is_null( $before_src ) ): else: ?>
            <div class="flex-block case-single__ba">
              <div class="case-single__before">
                <p class="case-single__ba__ttl">Before</p>
                <picture>
                  <!--<img src="<?php bloginfo('template_directory'); ?>/images/case/before01.png" alt="" loading="lazy">-->
                  <img src="<?php echo $before_src; ?>" alt="" loading="lazy">
                </picture>
                <p class="case-single__ba__txt"><?php the_field('wkComL01'); ?></p>
              </div>
              <div class="case-single__after">
                <p class="case-single__ba__ttl">After</p>
                <picture>
                  <img src="<?php echo $after_src; ?>" alt="" loading="lazy">
                </picture>
                <p class="case-single__ba__txt"><?php the_field('wkComR01'); ?></p>
              </div>
            </div>
<?php endif; ?>


<?php
  $before_src = null;
  $after_src = null;
  $before_image = get_field('wkImgL02');
  if(is_array($before_image)){
    $before_src = $before_image['url'];
  }else{
    $before_src = wp_get_attachment_image_src( $before_image, 'large' )[0];
  }
  $after_image = get_field('wkImgR02');
  if(is_array($after_image)){
    $after_src= $after_image['url'];
  }else{
    $after_src = wp_get_attachment_image_src( $after_image, 'large' )[0];
  }
?>
<?php if( is_null( $before_src ) ): else: ?>
            <div class="flex-block case-single__ba">
              <div class="case-single__before">
                <p class="case-single__ba__ttl">Before</p>
                <picture>
                  <!--<img src="<?php bloginfo('template_directory'); ?>/images/case/before01.png" alt="" loading="lazy">-->
                  <img src="<?php echo $before_src; ?>" alt="" loading="lazy">
                </picture>
                <p class="case-single__ba__txt"><?php the_field('wkComL02'); ?></p>
              </div>
              <div class="case-single__after">
                <p class="case-single__ba__ttl">After</p>
                <picture>
                  <img src="<?php echo $after_src; ?>" alt="" loading="lazy">
                </picture>
                <p class="case-single__ba__txt"><?php the_field('wkComR02'); ?></p>
              </div>
            </div>
<?php endif; ?>

<?php
  $before_src = null;
  $after_src = null;
  $before_image = get_field('wkImgL03');
  if(is_array($before_image)){
    $before_src = $before_image['url'];
  }else{
    $before_src = wp_get_attachment_image_src( $before_image, 'large' )[0];
  }
  $after_image = get_field('wkImgR03');
  if(is_array($after_image)){
    $after_src= $after_image['url'];
  }else{
    $after_src = wp_get_attachment_image_src( $after_image, 'large' )[0];
  }
?>
<?php if( is_null( $before_src ) ): else: ?>
            <div class="flex-block case-single__ba">
              <div class="case-single__before">
                <p class="case-single__ba__ttl">Before</p>
                <picture>
                  <!--<img src="<?php bloginfo('template_directory'); ?>/images/case/before01.png" alt="" loading="lazy">-->
                  <img src="<?php echo $before_src; ?>" alt="" loading="lazy">
                </picture>
                <p class="case-single__ba__txt"><?php the_field('wkComL03'); ?></p>
              </div>
              <div class="case-single__after">
                <p class="case-single__ba__ttl">After</p>
                <picture>
                  <img src="<?php echo $after_src; ?>" alt="" loading="lazy">
                </picture>
                <p class="case-single__ba__txt"><?php the_field('wkComR03'); ?></p>
              </div>
            </div>
<?php endif; ?>

<?php
  $before_src = null;
  $after_src = null;
  $before_image = get_field('wkImgL04');
  if(is_array($before_image)){
    $before_src = $before_image['url'];
  }else{
    $before_src = wp_get_attachment_image_src( $before_image, 'large' )[0];
  }
  $after_image = get_field('wkImgR04');
  if(is_array($after_image)){
    $after_src= $after_image['url'];
  }else{
    $after_src = wp_get_attachment_image_src( $after_image, 'large' )[0];
  }
?>
<?php if( is_null( $before_src ) ): else: ?>
            <div class="flex-block case-single__ba">
              <div class="case-single__before">
                <p class="case-single__ba__ttl">Before</p>
                <picture>
                  <!--<img src="<?php bloginfo('template_directory'); ?>/images/case/before01.png" alt="" loading="lazy">-->
                  <img src="<?php echo $before_src; ?>" alt="" loading="lazy">
                </picture>
                <p class="case-single__ba__txt"><?php the_field('wkComL04'); ?></p>
              </div>
              <div class="case-single__after">
                <p class="case-single__ba__ttl">After</p>
                <picture>
                  <img src="<?php echo $after_src; ?>" alt="" loading="lazy">
                </picture>
                <p class="case-single__ba__txt"><?php the_field('wkComR04'); ?></p>
              </div>
            </div>
<?php endif; ?>

<?php
  $before_src = null;
  $after_src = null;
  $before_image = get_field('wkImgL05');
  if(is_array($before_image)){
    $before_src = $before_image['url'];
  }else{
    $before_src = wp_get_attachment_image_src( $before_image, 'large' )[0];
  }
  $after_image = get_field('wkImgR05');
  if(is_array($after_image)){
    $after_src= $after_image['url'];
  }else{
    $after_src = wp_get_attachment_image_src( $after_image, 'large' )[0];
  }
?>
<?php if( is_null( $before_src ) ): else: ?>
            <div class="flex-block case-single__ba">
              <div class="case-single__before">
                <p class="case-single__ba__ttl">Before</p>
                <picture>
                  <!--<img src="<?php bloginfo('template_directory'); ?>/images/case/before01.png" alt="" loading="lazy">-->
                  <img src="<?php echo $before_src; ?>" alt="" loading="lazy">
                </picture>
                <p class="case-single__ba__txt"><?php the_field('wkComL05'); ?></p>
              </div>
              <div class="case-single__after">
                <p class="case-single__ba__ttl">After</p>
                <picture>
                  <img src="<?php echo $after_src; ?>" alt="" loading="lazy">
                </picture>
                <p class="case-single__ba__txt"><?php the_field('wkComR05'); ?></p>
              </div>
            </div>
<?php endif; ?>


<?php
  $before_src = null;
  $after_src = null;
  $before_image = get_field('wkImgL06');
  if(is_array($before_image)){
    $before_src = $before_image['url'];
  }else{
    $before_src = wp_get_attachment_image_src( $before_image, 'large' )[0];
  }
  $after_image = get_field('wkImgR06');
  if(is_array($after_image)){
    $after_src= $after_image['url'];
  }else{
    $after_src = wp_get_attachment_image_src( $after_image, 'large' )[0];
  }
?>
<?php if( is_null( $before_src ) ): else: ?>
            <div class="flex-block case-single__ba">
              <div class="case-single__before">
                <p class="case-single__ba__ttl">Before</p>
                <picture>
                  <!--<img src="<?php bloginfo('template_directory'); ?>/images/case/before01.png" alt="" loading="lazy">-->
                  <img src="<?php echo $before_src; ?>" alt="" loading="lazy">
                </picture>
                <p class="case-single__ba__txt"><?php the_field('wkComL06'); ?></p>
              </div>
              <div class="case-single__after">
                <p class="case-single__ba__ttl">After</p>
                <picture>
                  <img src="<?php echo $after_src; ?>" alt="" loading="lazy">
                </picture>
                <p class="case-single__ba__txt"><?php the_field('wkComR06'); ?></p>
              </div>
            </div>
<?php endif; ?>

          </div>
        </div>
      </section>

      <section class="case-single__sec04">
        <div class="wrap">
<?php if( have_rows('other') ): ?>
          <div class="scrollin" data-wow-offset="200">
            <h2 class="case__ttl">その他の画像を見る</h2>
          </div>
          <ul class="case-single__photo">
            <?php while ( have_rows('other') ) : the_row(); ?>
            <li class="case-single__photo__item">
              <picture>
                <img src="<?php the_sub_field('other_image'); ?>" alt="" loading="lazy">
              </picture>
              <p class="case-single__photo__txt"><?php the_sub_field('other_text'); ?></p>
            </li>
            <?php endwhile; ?>
          </ul>
<?php endif; ?>

          <div class="case-single__comment">
            <h3 class="case-single__comment__tll">担当者からのコメント</h3>
            <p class="case-single__comment__txt"><?php the_field('wkSumCom'); ?></p>
          </div>

        </div>
      </section>

<?php
  $query = new WP_Query(
    array(
      'orderby' => 'date',
      'order' => 'DESC',
      'post_type' => 'works',
      'posts_per_page' => 6,
    )
  );
?>
      <section class="case">
        <div class="wrap">
          <div class="scrollin" data-wow-offset="200">
            <h2 class="case__ttl">この他の施工事例</h2>
          </div>
<?php if ( $query->have_posts() ): ?>
          <ul class="case-list">
<?php while ( $query->have_posts() ) : $query->the_post(); ?>


<?php
  $thum_image = get_field('wkImg00');

  if(is_array($thum_image)){
    $thum_src= $thum_image['url'];
  }else{
    $thum_src = wp_get_attachment_image_src( $thum_image, 'large' )[0];
  }

  if (is_null($thum_src)){
    $thum_src = get_bloginfo('template_directory');
    $thum_src = $thum_src."/images/top/case_01.jpg";
  }

  $taxonomy_terms_cat = wp_get_object_terms($post->ID, 'cate_works');
  $taxonomy_terms_cat_name = $taxonomy_terms_cat[0]->name; //ターム名

  $caption = get_field('area');
  $caption = $caption.get_field('caption');

?>

            <li class="scrollin-3col">
              <div class="case-list__wrap">
                <a href="<?php the_permalink(); ?>">
                  <img src="<?php echo $thum_src; ?>" alt="" loading="lazy">
                </a>
                <div class="case-list__txt">
                  <ul class="case-list__category">
                    <li><a href="#"><?php echo $taxonomy_terms_cat_name; ?></a></li>
                  </ul>

                  <a href="<?php the_permalink(); ?>">
                    <span class="case-list__ttl"><?php echo $caption; ?></span>
                    <p><?php the_title(); ?></p>
                  </a>

                  <ul class="case-list__tag">
                    <!--
                    <li><a href="#">北欧</a></li>
                    <li><a href="#">女性がつかいやすいキッチン</a></li>
                    <li><a href="#">収納多め</a></li>
                    -->
                    <?php echo get_the_term_list($post->ID,'tag_works','',' | '); ?>
                  </ul>
                </div>
              </div>
            </li>
<?php endwhile; ?>
          </ul>
<?php endif; ?>
<?php wp_reset_postdata(); ?>

          <div class="more-btn scrollin">
            <a href="<?php echo esc_url( home_url( '/works/' ) ); ?>">more</a>
          </div>
<!--
          <form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url('/') ); ?>">
          <div class="search-block">
            <p class="search-txt">事例・記事をキーワードで検索</p>
            <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="例）モルタル、自然素材">
            <input type="submit" value="検索">
          </div>
          </form>
-->
        </div>
      </section>

    </article>
  </main>
  <?php endwhile;endif; ?>
<?php get_footer(); ?>
