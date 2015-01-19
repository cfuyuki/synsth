<?php 
$ts_funcs = new TS_Funcs;
$layout = $ts_funcs->opt_layout();
$sidebar = $ts_funcs->opt_sidebar();
?>

<?php get_template_part('templates/head'); ?>

<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    
    //get_template_part('templates/header');
  ?>
  <div class="wrap container" role="document">
    <div class="content row ts-sticky-adv-parent vertical"> <!-- Sticky Parent -->

    	<?php if (roots_display_sidebar()) : ?>
	      <?php if ( $layout==='sandwitch' || $layout==='sidebar-left' ) : ?>
	        <aside class="sidebar-left" role="complementary">
            <div id = "ts-acc-hover" class = "sidebar-left-inner ts-sticky-adv-left" data-top="80"> <!-- Sticky Child --> <!-- Accordion Parent -->
	            <?php include roots_sidebar_path($sidebar['left']); ?>
            </div>
	        </aside><!-- /.sidebar -->
	      <?php endif; ?>
	    <?php endif; ?>

      <main class="main" role="main">
        <?php include roots_template_path(); ?>
      </main><!-- /.main -->

      <?php if (roots_display_sidebar()) : ?>
        <?php if ( $layout==='sandwitch' || $layout==='sidebar-right' ) : ?>
          <aside class="sidebar-right" role="complementary" >
            <div class = "sidebar-right-inner ts-sticky-adv-right" data-top="80"> <!-- Sticky Child -->
              <?php include roots_sidebar_path($sidebar['right']); ?>
            </div>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>

</body>
</html>
