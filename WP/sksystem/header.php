<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <script>
    if (!/iPhone|iPod|Android/.test(navigator.userAgent)) {
      document.querySelector('meta[name=viewport]').content = 'width=1200';
    }
  </script>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="theme-color">
  <title>株式会社エスケイシステム</title>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/lib/slick.css" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/lib/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/common.css" />
  <?php if(is_front_page() ): ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/top.css" />
  <?php else : ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/sub.css" />
  <?php endif; ?>
  <?php if(is_page('privacy') ): ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/privacy.css" />
  <?php endif; ?>
  <?php if(is_page('news') ): ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/news.css" />
  <?php endif; ?>
  <?php if(is_page('contact') ): ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/contact.css" />
  <?php endif; ?>
  <?php if(is_page('qa') ): ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/qa.css" />
  <?php endif; ?>
  <?php if(is_page('line') ): ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/line.css" />
  <?php endif; ?>
  <?php if(is_page('company') ): ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/company.css" />
  <?php endif; ?>
  <?php if(is_page('about') ): ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/about.css" />
  <?php endif; ?>
  <?php if(is_page('flow') ): ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/flow.css" />
  <?php endif; ?>
  <?php if( is_category() ): ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/news.css" />
  <?php endif; ?>
  <?php if( is_category('magazine') ): ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/magazine.css" />
  <?php endif; ?>
  <?php if( is_category('saga') ): ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/magazine.css" />
  <?php endif; ?>
  <?php if( is_category('fukuoka') ): ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/magazine.css" />
  <?php endif; ?>
  <?php if( is_category('construction') ): ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/state.css" />
  <?php endif; ?>
  <?php if(is_singular('works')): ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/case.css" />
  <?php endif; ?>
  <?php if(is_post_type_archive('works')): ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/case.css" />
  <?php endif; ?>
  <?php if(is_tax('cate_works')): ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/case.css" />
  <?php endif; ?>
  <?php if(is_tax('tag_works')): ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/case.css" />
  <?php endif; ?>
  <?php if(is_search()): ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/case.css" />
  <?php endif; ?>
  <?php if(is_single()): ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/single.css" />
  <?php endif; ?>
  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/lib/slick.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/common.js"></script>
  <?php if(is_front_page() ): ?>
    <script src="<?php bloginfo('template_directory'); ?>/js/top.js"></script>
  <?php else : ?>
    <script src="<?php bloginfo('template_directory'); ?>/js/sub.js"></script>
  <?php endif; ?>
  
  <?php wp_head(); ?>
</head>

<body id="body">
  <div id="loading">
    <div id="loading__img">
      <img src="<?php bloginfo('template_directory'); ?>/images/top/loading.svg" alt="logo">
      <span>loading...</span>
    </div>
    <div class="loading__splash"></div>
  </div>

  <!---=================================
    HEADER
  ==================================--->
  <header id="header">
    <div class="header__wrap">
      <?php if(is_front_page() ): ?>
        <h1 class="header-logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php bloginfo('template_directory'); ?>/images/common/logo.svg" alt="logo">
          </a>
        </h1>
      <?php else : ?>
        <div class="header-logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php bloginfo('template_directory'); ?>/images/common/logo.svg" alt="logo">
          </a>
        </div>
      <?php endif; ?>

      <nav class="global-nav">
        <ul class="global-nav-list">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></li>
          <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">エスケイシステムにできること</a></li>
          <li><a href="<?php echo esc_url( home_url( '/works/' ) ); ?>">施工事例</a></li>
          <li><a href="<?php echo esc_url( home_url( '/qa/' ) ); ?>">よくあるご質問</a></li>
          <li><a href="<?php echo esc_url( home_url( '/company/' ) ); ?>">会社概要</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div id="drawer-trigger"><span>menu</span></div>

  <div id="drawer">
    <div class="drawer__wrap">
      <nav class="drawer-nav">
        <ul class="drawer-nav-list">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></li>
          <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">エスケイシステムに<br class="pc">できること</a></li>
          <li>
            <a class="trigger" href="<?php echo esc_url( home_url( '/works/' ) ); ?>">施工事例</a>
            <ul class="drawer-nav-sublist">
              <li><a href="<?php echo esc_url( home_url( '/cate_works/new_building/' ) ); ?>">新築</a></li>
              <li><a href="<?php echo esc_url( home_url( '/cate_works/renovation/' ) ); ?>">リノベーション</a></li>
              <li><a href="<?php echo esc_url( home_url( '/cate_works/reform/' ) ); ?>">リフォーム・増改築</a></li>
              <li><a href="<?php echo esc_url( home_url( '/cate_works/store/' ) ); ?>">店舗</a></li>
              <li><a href="<?php echo esc_url( home_url( '/cate_works/toilet/' ) ); ?>">トイレ</a></li>
              <li><a href="<?php echo esc_url( home_url( '/cate_works/kitchen/' ) ); ?>">キッチン</a></li>
              <li><a href="<?php echo esc_url( home_url( '/cate_works/bathroom/' ) ); ?>">浴室・洗面</a></li>
              <li><a href="<?php echo esc_url( home_url( '/cate_works/exterior/' ) ); ?>">外構・エクステリア</a></li>
              <li><a href="<?php echo esc_url( home_url( '/cate_works/others/' ) ); ?>">その他</a></li>
            </ul>
          </li>
          <li><a href="#">リフォーム・新築の流れ</a></li>
          <li><a href="<?php echo esc_url( home_url( '/qa/' ) ); ?>">よくあるご質問</a></li>
        </ul>

        <ul class="drawer-nav-list">
          <li><a href="#">スタッフ紹介</a></li>
          <li><a href="<?php echo esc_url( home_url( '/company/' ) ); ?>">会社概要</a></li>
          <li><a href="<?php echo esc_url( home_url( '/line/' ) ); ?>">LINEで相談</a></li>
          <li><a href="<?php echo esc_url( home_url( '/news/' ) ); ?>">お知らせ</a></li>
          <li><a href="<?php echo esc_url( home_url( '/construction/' ) ); ?>">施工中の様子</a></li>
          <li>
            <a class="trigger" href="<?php echo esc_url( home_url( '/magazine/' ) ); ?>">マガジン</a>

            <ul class="drawer-nav-sublist">
              <li><a href="#">佐賀ぐーるぐる</a></li>
              <li><a href="#">福岡ぐーるぐる</a></li>
            </ul>
          </li>
          <li><a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>">プライバシーポリシー</a></li>
        </ul>
      </nav>

      <div class="drawer-content">
        <h3 class="drawer-content__ttl">リフォーム・新築・土地探しに関する<br>お問い合わせ</h3>

        <div class="drawer-tel">
          <ul>
            <li>
              <span class="drawer-tel__num">
                佐賀本店<span>0120-927-502</span>
              </span>
              <span class="drawer-tel__address">〒849-0937 佐賀県佐賀市鍋島3丁目9-2／9:00〜18:00（定休日:日・祝）</span>
            </li>
            <!-- <li>
              <span class="drawer-tel__num">
                北九州支店<span>0120-927-502</span>
              </span>
              <span class="drawer-tel__address">〒849-0937 佐賀県佐賀市鍋島3丁目9-2／9:00〜18:00（定休日:日・祝）</span>
            </li> -->
          </ul>
        </div>

        <div class="drawer-contact">
          <ul>
            <li>
              <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">お問い合わせ・無料見積もり</a>
            </li>
            <li>
              <a class="line" href="<?php echo esc_url( home_url( '/line/' ) ); ?>">LINEで気軽に相談</a>
            </li>
          </ul>
        </div>

        <h3 class="drawer-content__ttl">土地から探せます</h3>
        <div class="drawer-search">
          <a href="https://www.sk-sys-ngp.jp/" target="_blank">不動産サイトはこちら<span>物件・土地を探す</span></a>
        </div>
      </div>
    </div>
  </div>
