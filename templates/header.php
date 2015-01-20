<header class="header ts-sticky-simple-parent" role="banner">
<div class="ts-sticky-simple">
  <div id="nav" class="">
    

    <a id="logo" href="<?php bloginfo( 'url' ); ?>">
    <?php
    	$logo = get_option( 'ts_logo' );
		$logo_x2 = get_option( 'ts_logo_x2' );

		if ( $logo == '' ) {
			$logo = get_template_directory_uri() . '/images/logo_tools.png';
		}
		if ( $logo_x2 == '' ) {
			$logo_x2 = $logo;
		}
	?>
		<img class="default" src="<?php echo $logo; ?>" alt="<?php bloginfo( 'name' ); ?>" />
		<img class="retina" src="<?php echo $logo_x2; ?>" alt="<?php bloginfo('name'); ?>" />
    </a>
    
    <!--<a id="menu" class="" href="#"><i class="fa fa-reorder"></i></a>-->
    <div id="menu">
    <?php echo do_shortcode('
    	[ts_modal id="menu" type="fullscreen"]
    	[ts_modal_button]
    	[bs_button style="btn tmpl-line" icon="fa fa-reorder" type="button" title=""]
    	[/ts_modal_button]
    	[ts_modal_header]'
    	. '<h1 style="height:100px">' . '<img class="default aligncenter" src="' . $logo . '" />' . '</h1>'
    	.'[/ts_modal_header]
    	[ts_modal_content]'
    	. wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav', 'echo' => false))
    	.'[/ts_modal_content]
    	[/ts_modal]');
    ?>
  	</div>
  </div>
  <div id="page-header">
    <h1>
      <?php echo roots_title(); ?>
    </h1>
    <?php include roots_sidebar_path('sidebar-top'); ?>
  </div>
</div>
</header>
