<?php get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <article>
    <section>
      <?php the_title( '<h1>', '</h1>' ); ?>
    </section>
    <section>
    <?php if ( has_post_thumbnail()) : ?>
        <?php the_post_thumbnail(); ?>
    <?php endif; ?>
    <?php the_content(); ?>
    </section>
    <nav>
      <?php previous_post_link("%link", "&lt; %title"); ?>
      <?php next_post_link("%link", "%title &gt;"); ?>
    </nav>
  </article>
  <?php endwhile;endif; ?>
<?php get_footer(); ?>