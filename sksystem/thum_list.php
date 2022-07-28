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
  <ul>
  <?php while ( $query->have_posts() ) : $query->the_post(); ?>
    <li><?php the_time( 'Y.m.d' ); ?><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
  <?php endwhile; ?>
  </ul>
<?php endif; ?>

<?php wp_reset_postdata(); ?>
