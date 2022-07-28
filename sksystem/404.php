<?php get_header(); ?>
  <main id="main">
    <article>
      <section class="mv">
        <div class="mv__img">
          <picture>
            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/images/notfound/sp/mv.png">
            <img src="<?php bloginfo('template_directory'); ?>/images/notfound/mv.png" alt="MV" loading="lazy">
          </picture>
        </div>
        <div class="mv__txt">
          <h1>
            <span class="ja">お探しのページは見つかりませんでした</span>
            <span class="en">
              <picture>
                <img src="<?php bloginfo('template_directory'); ?>/images/notfound/mv_en.png" alt="404" loading="lazy">
              </picture>
            </span>
          </h1>
        </div>
        <ul class="breadcrumb">
          <li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></li>
          <li class="crrent"><span class="arrow">&gt;</span>お探しのページは見つかりませんでした</li>
        </ul>
      </section>
      <section class="sub_first">
        <div class="wrap">
          <div class="scrollin" data-wow-offset="200">
            
            <p class="txt_center mb5 mt3">弊社WEBサイトリニューアルのため、お探しのページは移動または削除された可能性があります。<br>
              このページをブックマークに登録されていた方は、お手数ですがブックマークの更新をお願いいたします。
            </p>
              <div class="more-btn scrollin">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページへ</a>
              </div>
            
          </div>
        </div>
      </section>
    </article>
  </main>
<?php get_footer(); ?>