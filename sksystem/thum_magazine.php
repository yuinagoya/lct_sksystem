<?php
  $query = new WP_Query(
    array(
      'orderby' => 'date',
      'order' => 'DESC',
      'category_name' => $param_category,
      'posts_per_page' => $param_count,
    )
  );
?>
<?php if ( $query->have_posts() ): ?>
  <ul class="magazine-list">

  <?php while ( $query->have_posts() ) : $query->the_post(); ?>

    <li>
      <div class="magazine-list__img">
        <a href="<?php the_permalink(); ?>">
          <img src="<?php bloginfo('template_directory'); ?>/images/top/magazine_01.jpg" alt="" loading="lazy">
        </a>
      </div>

      <div class="magazine-list__txt">
        <div class="magazine-list__info">
          <time><?php the_time( 'Y.m.d' ); ?></time>
          <a href="#">佐賀ぐーるぐる</a>
        </div>
        <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
      </div>
    </li>

  <?php endwhile; ?>

  </ul>

<?php endif; ?>

<?php wp_reset_postdata(); ?>
