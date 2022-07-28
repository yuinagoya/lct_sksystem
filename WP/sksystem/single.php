<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main id="main">
      <article>
        <div class="wrap">
          <section class="single">
            <?php the_title('<h1>', '</h1>'); ?>
            <time class="post-date"><?php the_time('Y年m月d日'); ?></time>
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail(); ?>
            <?php endif; ?>

            <div class="post-content">
              <?php the_content(); ?>
            </div>
            <!-- /.post-content -->
          </section>

          <nav class="pager">
            <?php previous_post_link("%link", "&lt; %title"); ?>
            <?php next_post_link("%link", "%title &gt;"); ?>
          </nav>
        </div>
        <!-- /.wrap -->
      </article>
    </main>

<?php endwhile;
endif; ?>
<?php get_footer(); ?>