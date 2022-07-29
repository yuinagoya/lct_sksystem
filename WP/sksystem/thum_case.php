<?php
  $query = new WP_Query(
    array(
      'orderby' => 'date',
      'order' => 'DESC',
      'post_type' => $param_category,
      'posts_per_page' => $param_count,
    )
  );
?>
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
    $thum_src = $thum_src."/images/case/dummy.jpg";
  }

  $taxonomy_terms_cat = wp_get_object_terms($post->ID, 'cate_case');
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

          <a href="#">
            <span class="case-list__ttl"><?php echo $caption; ?></span>
            <p><?php the_title(); ?></p>
          </a>

          <ul class="case-list__tag">
            <?php echo get_the_term_list($post->ID,'tag_case','',' | '); ?>
          </ul>
        </div>
      </div>
    </li>

  <?php endwhile; ?>
  </ul>
<?php endif; ?>

<?php wp_reset_postdata(); ?>
