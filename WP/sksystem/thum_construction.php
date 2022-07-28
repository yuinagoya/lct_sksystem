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
  <ul class="state-list">

  <?php while ( $query->have_posts() ) : $query->the_post(); ?>

    <li class="scrollin-3col">
      <a href="<?php the_permalink(); ?>">
        <img src="<?php bloginfo('template_directory'); ?>/images/top/state_01.jpg" alt="" loading="lazy">
        <time><?php the_time( 'Y.m.d' ); ?></time>
        <p><?php the_title(); ?></p>
      </a>
    </li>
  <?php endwhile; ?>

  </ul>

<?php endif; ?>

<?php wp_reset_postdata(); ?>
