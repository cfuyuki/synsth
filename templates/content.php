<article <?php post_class(); ?> style="margin-bottom: 20px; overflow: hidden;">
  <header>

  </header>
  <?php if(has_post_thumbnail()): ?>
  <div class="entry-media col-sm-3" style="padding: 0;"><?php the_post_thumbnail();?></div>
  <?php endif; ?>
  <div class="entry-data <?php echo (has_post_thumbnail())? 'col-sm-9': ''; ?>" style="font-size: 15px;">
    <h2 class="entry-title" style="margin-bottom: 30px; line-height: 1;">
      <a href="<?php the_permalink(); ?>" style="font-size: 24px; font-weight: 600;"><?php the_title();
        ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
    <div class="entry-summary" style="clear: both; margin: 10px 0;">
      <?php the_excerpt(); ?>
    </div>
  </div>

</article>
