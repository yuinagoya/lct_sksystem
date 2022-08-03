  <!---=================================
    FOOTER
  ==================================--->
  <footer id="footer">
    <div class="footer-contact scrollin">
      <h2 class="footer-contact__ttl">お問い合わせ</h2>
      <p>ちょっとした工事も、土地を探すところから<br class="sp">の住まい・店舗づくりも<br>まずはお気軽にご相談ください。</p>

      <div class="footer-contact__box">
        <div class="footer-contact-tel">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php bloginfo('template_directory'); ?>/images/common/icon_tel.png" alt="アイコン" loading="lazy">
            <p><span>0952-31-5884</span><br>9:00〜17:00（定休日／日・祝）</p>
          </a>
        </div>

        <ul class="footer-contact-btn">
          <li>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
              <p>お問い合わせ<br>無料見積もり</p>
            </a>
          </li>
          <li>
            <a class="line" href="<?php echo esc_url( home_url( '/line/' ) ); ?>">
              <p>LINEで<br>気軽に相談</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="footer-area scrollin">
      <div class="footer-area__flex">
        <div class="footer-area__txt">
          <h3 class="footer-area__ttl">施工対応エリア</h3>
          <h4 class="footer-area__subttl"><span>佐賀県全域・福岡県全域</span><br>地域密着で安心のエスケイシステム</h4>
          <p>エリア外の地域の方もまずはお問い合わせください。<br>柔軟に対応いたします。</p>
        </div>

        <div class="footer-area-covid">
          <h3 class="footer-area-covid__ttl">新型コロナウイルス対策実施中</h3>
          <ul class="footer-area-covid__list">
            <li>
              <img src="<?php bloginfo('template_directory'); ?>/images/top/covid_01.png" alt="アイコン" loading="lazy">
              <span>マスク着用</span>
            </li>
            <li>
              <img src="<?php bloginfo('template_directory'); ?>/images/top/covid_02.png" alt="アイコン" loading="lazy">
              <span>消毒液設置</span>
            </li>
            <li>
              <img src="<?php bloginfo('template_directory'); ?>/images/top/covid_03.png" alt="アイコン" loading="lazy">
              <span>検温管理</span>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="footer-sns-link scrollin">
      <ul>
        <li>
          <a href="#">
            <picture>
              <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/images/common/sp/btn_facebook.png">
              <img src="<?php bloginfo('template_directory'); ?>/images/common/btn_facebook.png" alt="FACEBOOK" loading="lazy">
            </picture>
          </a>
        </li>
        <li>
          <a href="#">
            <picture>
              <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/images/common/sp/btn_instagram.png">
              <img src="<?php bloginfo('template_directory'); ?>/images/common/btn_instagram.png" alt="INSTAGRAM" loading="lazy">
            </picture>
          </a>
        </li>
      </ul>
    </div>

    <div class="pc-fixed-bnr">
      <div class="pc-fixed-bnr-search">
        <a href="https://www.sk-sys-ngp.jp/" target="_blank">
          <p>不動産サイトはこちら<span>物件・土地を探す</span></p>
        </a>
      </div>

      <div class="pc-fixed-bnr-tel">
        <ul class="pc-fixed-bnr-tel__list">
          <li>
            <span>佐賀本社</span>
            <span>0952-31-5884</span>
            <span>9:00～17:00（定休日／日・祝）</span>
          </li>
          <!-- <li>
            <span>佐賀本社</span>
            <span>0952-31-5884</span>
            <span>9:00～17:00（定休日／日・祝）</span>
          </li> -->
        </ul>
      </div>

      <div class="pc-fixed-bnr-mail">
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">お問い合わせ</a>
      </div>
      <!-- /.pc-fixed-bnr-mail -->

      <div class="pc-fixed-bnr-line">
        <a href="<?php echo esc_url( home_url( '/line/' ) ); ?>">LINEで相談</a>
      </div>
    </div>

    <div class="footer-contents">
      <div class="footer-contents__wrap">
        <div class="footer-info">
          <div class="footer-logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
              <img src="<?php bloginfo('template_directory'); ?>/images/common/logo.svg" alt="ロゴ" loading="lazy">
            </a>
          </div>
          <div class="footer-sns">
            <ul>
              <li>
                <a href="#">
                  <img src="<?php bloginfo('template_directory'); ?>/images/common/icon_facebook.png" alt="FACEBOOK" loading="lazy">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="<?php bloginfo('template_directory'); ?>/images/common/icon_instagram.png" alt="INSTAGRAM" loading="lazy">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="<?php bloginfo('template_directory'); ?>/images/common/icon_line.png" alt="LINE" loading="lazy">
                </a>
              </li>
            </ul>
          </div>

          <div class="footer-address">
            <p>〒849-0937<br>佐賀県佐賀市鍋島3丁目9-2<br>TEL：0952-31-5884<br>FAX：0952-31-5889</p>
          </div>
        </div>

        <nav class="footer-nav">
          <ul class="footer-nav-list">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></li>
            <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">エスケイシステムにできること</a></li>
            <li>
              <a href="<?php echo esc_url( home_url( '/works/' ) ); ?>">施工事例</a>

              <div class="footer-nav-list__flex">
                <ul class="footer-nav-sublist">
                  <li><a href="<?php echo esc_url( home_url( '/cate_works/new_building/' ) ); ?>">新築</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/cate_works/reform/' ) ); ?>">リフォーム・増改築</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/cate_works/toilet/' ) ); ?>">トイレ</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/cate_works/bathroom/' ) ); ?>">浴室・洗面</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/cate_works/others/' ) ); ?>">その他</a></li>
                </ul>

                <ul class="footer-nav-sublist">
                  <li><a href="<?php echo esc_url( home_url( '/cate_works/renovation/' ) ); ?>">リノベーション</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/cate_works/store/' ) ); ?>">店舗</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/cate_works/kitchen/' ) ); ?>">キッチン</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/cate_works/exterior/' ) ); ?>">外構・エクステリア</a></li>
                </ul>
              </div>
            </li>
            <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">リフォーム・新築の流れ</a></li>
            <li><a href="<?php echo esc_url( home_url( '/qa/' ) ); ?>">よくあるご質問</a></li>
          </ul>

          <ul class="footer-nav-list">
            <li><a href="<?php echo esc_url( home_url( '/staff/' ) ); ?>">スタッフ紹介</a></li>
            <li><a href="<?php echo esc_url( home_url( '/company/' ) ); ?>">会社概要</a></li>
            <li><a href="<?php echo esc_url( home_url( '/line/' ) ); ?>">LINEで相談</a></li>
            <li><a href="<?php echo esc_url( home_url( '/news/' ) ); ?>">お知らせ</a></li>
            <li><a href="<?php echo esc_url( home_url( '/construction/' ) ); ?>">施工中の様子</a></li>
            <li>
              <a href="<?php echo esc_url( home_url( '/magazine/' ) ); ?>">マガジン</a>

              <ul class="footer-nav-sublist">
                <li><a href="<?php echo esc_url( home_url( '/magazine/saga/' ) ); ?>">佐賀ぐーるぐる</a></li>
                <li><a href="<?php echo esc_url( home_url( '/magazine/fukuoka/' ) ); ?>">福岡ぐーるぐる</a></li>
              </ul>
            </li>
            <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">お問い合わせ</a></li>
            <li><a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>">プライバシーポリシー</a></li>
          </ul>
        </nav>
      </div>

      <div id="to-top" class="scroll-link">
        <a href="#body"><img src="<?php bloginfo('template_directory'); ?>/images/common/to_top.png" alt="TOP" loading="lazy"></a>
      </div>
    </div>
    <div class="copyright">
      <small>© 株式会社 エスケイシステム</small>
    </div>
  </footer>

  <div class="sp-fixed-bnr">
    <ul class="sp-fixed-bnr__list">
      <li>
        <a href="https://www.sk-sys-ngp.jp/" target="_blank">
          <img src="<?php bloginfo('template_directory'); ?>/images/common/icon_window.png" alt="アイコン" loading="lazy">
          <span>物件・土地<br>を探す</span>
        </a>
      </li>
      <li>
        <a href="#">
          <img src="<?php bloginfo('template_directory'); ?>/images/common/icon_tel.png" alt="アイコン" loading="lazy">
          <span>佐賀本社</span>
        </a>
      </li>
      <!-- <li>
        <a href="#">
          <img src="<?php bloginfo('template_directory'); ?>/images/common/icon_tel.png" alt="アイコン" loading="lazy">
          <span>北九州支店</span>
        </a>
      </li> -->
    </ul>

    <div class="sp-fixed-bnr__mail">
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/common/icon_mail_green.png" alt="メール">お問い合わせ</a>
    </div>
    <!-- /.sp-fixed-bnr__line -->

    <div class="sp-fixed-bnr__line">
      <a href="<?php echo esc_url( home_url( '/line/' ) ); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/common/icon_line.png" alt="LINE">LINEで相談</a>
    </div>
  </div>
<?php wp_footer(); ?>
</body>
</html>
