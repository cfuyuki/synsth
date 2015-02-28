<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header style="margin-bottom: 40px;">
      <?php if(!is_page())get_template_part('templates/entry-meta'); ?>
      <?php get_template_part('templates/entry-media'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php if(!is_page())comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>