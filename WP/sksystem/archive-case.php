<?php get_header(); ?>
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
          <li class="crrent"><span class="arrow">&gt;</span>施工事例</li>
        </ul>
      </section>

      <section class="sub_first case__sec01">
        <div class="wrap">
          <div class="scrollin" data-wow-offset="200">
            <h2 class="case__ttl">カテゴリーから探す</h2>

          </div>

          <ul class="case-nav scrollin" data-wow-offset="200">
            <li>
              <a href="<?php echo esc_url( home_url( '/case/' ) ); ?>">
                <img src="<?php bloginfo('template_directory'); ?>/images/case/case_nav_all.png" alt="" loading="lazy">
                <span>すべて</span>
              </a>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/cate_case/new_building/' ) ); ?>">
                <img src="<?php bloginfo('template_directory'); ?>/images/top/case_nav_01.png" alt="" loading="lazy">
                <span>新築</span>
              </a>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/cate_case/renovation/' ) ); ?>">
                <img src="<?php bloginfo('template_directory'); ?>/images/top/case_nav_02.png" alt="" loading="lazy">
                <span>リノベーション</span>
              </a>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/cate_case/reform/' ) ); ?>">
                <img src="<?php bloginfo('template_directory'); ?>/images/top/case_nav_03.png" alt="" loading="lazy">
                <span>リフォーム・<br class="sp">増改築</span>
              </a>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/cate_case/store/' ) ); ?>">
                <img src="<?php bloginfo('template_directory'); ?>/images/top/case_nav_04.png" alt="" loading="lazy">
                <span>店舗</span>
              </a>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/cate_case/toilet/' ) ); ?>">
                <img src="<?php bloginfo('template_directory'); ?>/images/top/case_nav_05.png" alt="" loading="lazy">
                <span>トイレ</span>
              </a>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/cate_case/kitchen/' ) ); ?>">
                <img src="<?php bloginfo('template_directory'); ?>/images/top/case_nav_06.png" alt="" loading="lazy">
                <span>キッチン</span>
              </a>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/cate_case/bathroom/' ) ); ?>">
                <img src="<?php bloginfo('template_directory'); ?>/images/top/case_nav_07.png" alt="" loading="lazy">
                <span>浴室・洗面</span>
              </a>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/cate_case/exterior/' ) ); ?>">
                <img src="<?php bloginfo('template_directory'); ?>/images/top/case_nav_08.png" alt="" loading="lazy">
                <span>外構・<br class="sp">エクステリア</span>
              </a>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/cate_case/others/' ) ); ?>">
                <img src="<?php bloginfo('template_directory'); ?>/images/top/case_nav_09.png" alt="" loading="lazy">
                <span>その他</span>
              </a>
            </li>
          </ul>

          <div class="scrollin" data-wow-offset="200">
            <div class="case__tag">
              <h3>人気のタグ</h3>
<!--
              <form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url('/') ); ?>">
              <div class="search-block">
                <p class="search-txt">タグを検索</p>
                <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="例）モルタル、自然素材">
                <input type="submit" value="">
              </div>
              </form>
-->
              <ul class="case-list__tag">
<!--
                <li><a href="#">介護リフォーム</a></li>
                <li><a href="#">二世帯住宅</a></li>
                <li><a href="#">BBQスペース</a></li>
                <li><a href="#">カフェスタイル</a></li>
                <li><a href="#">ヴィンテージ</a></li>
                <li><a href="#">下水道工事・浄化槽工事</a></li>
                <li><a href="#">収納多め</a></li>
                <li><a href="#">サンルーム</a></li>
                <li><a href="#">リノベーション一人暮らし</a></li>
                <li><a href="#">タイル壁</a></li>
                <li><a href="#">ナチュラル</a></li>
                <li><a href="#">子供部屋</a></li>
-->
<?php
  $terms = get_terms('tag_case'); // タクソノミーの指定
  foreach ($terms as $term) {
    echo '<li><a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
  }
  $current_tag = single_tag_title("", false);
  if(is_null($current_tag)){
    $current_tag = "すべて";
  }
?>

              </ul>
            </div>
            <div class="case__search">
              <h3 class="case__search__head">検索結果：</h3>
              <p class="case__search__word"><?php echo $current_tag; ?></p>
            </div>
          </div>
        </div>
      </section>
<?php if ( have_posts() ): ?>
      <section class="case__sec02">
        <div class="wrap">
          <p class="case-count scrollin" data-wow-offset="200">全<?php echo $wp_query->found_posts; ?>件</p>
          <ul class="case-list">
<?php while ( have_posts() ) : the_post(); ?>

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

  $taxonomy_terms_cat = wp_get_object_terms($post->ID, 'cate_case');
  $taxonomy_terms_cat_name = $taxonomy_terms_cat[0]->name; //ターム名
  $caption = get_field('area');
  $caption = $caption.get_field('caption');
?>

            <li class="scrollin-3col">

              <div class="case-list__wrap">

                <a href="<?php the_permalink(); ?>">
                  <img src="<?php bloginfo('template_directory'); ?>/images/top/case_01.jpg" alt="" loading="lazy">
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
                    <?php echo get_the_term_list($post->ID,'tag_case','',' | '); ?>
                  </ul>
                </div>

              </div>

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