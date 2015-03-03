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
      <?php wp_link_pages(array('before' => '<nav class="page-nav aligncenter mrgn-40"><ul class="pagination pagination-lg">'
      . '<li class="disabled"><span>
' . __('Pages', 'roots') . '</span></li><li><span>', 'after' => '</span></li></ul></nav>', 'separator' =>
      '</span></li><li><span>',)); ?>
    </footer>
    <?php if(!is_page())comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>