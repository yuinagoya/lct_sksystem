<?php
  $query = new WP_Query(
    array(
      'orderby' => 'date',
      'order' => 'DESC',
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => $param_count,
    )
  );
?>
<?php if ( $query->have_posts() ): ?>
  <ul class="post-list">

  <?php while ( $query->have_posts() ) : $query->the_post(); ?>

    <li>
      <div class="post-list__info">
        <time><?php the_time( 'Y.m.d' ); ?></time>
        <ul class="post-list__category">
<?php
  $categories = get_the_category();
  foreach( $categories as $category ) {
    echo '<li>'.$category->name.'</li>';
  }
?>
        </ul>
      </div>
      <a href="<?php the_permalink(); ?>">
        <p><?php the_title(); ?></p>
      </a>
    </li>

  <?php endwhile; ?>

  </ul>

<?php endif; ?>

<?php wp_reset_postdata(); ?>
