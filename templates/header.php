<header class="header " role="banner" class="" >
<div class="header-inner ts-sticky-simple" data-top=0 style="">
  <div id="header-nav">
  <div id="nav" class="">
    

    <a id="logo" href="<?php bloginfo( 'url' ); ?>">
    <?php
    	$logo = get_option( 'ts_logo' );
		$logo_x2 = get_option( 'ts_logo_x2' );

		if ( $logo == '' ) {
			$logo = get_template_directory_uri() . '/assets/img/logo_synsth-s.png';
		}
		if ( $logo_x2 == '' ) {
			$logo_x2 = get_template_directory_uri() . '/assets/img/logo_synsth-s.svg';
		}
	?>
		<img class="default" src="<?php echo $logo; ?>" alt="<?php bloginfo( 'name' ); ?>" />
		<img class="retina" src="<?php echo $logo_x2; ?>" alt="<?php bloginfo('name'); ?>" />
    </a>
    
    <!--<a id="menu" class="" href="#"><i class="fa fa-reorder"></i></a>-->
    <div id="menu">
    <?php

	$menu = wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav', 'echo' =>
		false, 'fallback_cb' => '__return_false'));//
	if (!$menu) $menu =
		'<div class="alert alert-info skiny-centered">'
		. '<h6>' . __('Menu is empty!', 'root') . '</h6>'
		. __('Create a menu and assign it to "Primary Navigation" on dashboard "Appearance/Menus"',
							  'root') . '</div>';

	echo do_shortcode('
    	[ts_modal id="menu" type="fullscreen"]
    	[ts_modal_button]
    	<button class="btn btn btn-menu tmpl-line"><i class="glyphicon glyphicon-menu-hamburger"></i></button>
    	[/ts_modal_button]
    	[ts_modal_header]'
    	. '<h1 style="height:100px">' . '<img class="default aligncenter" src="' . $logo . '" />' . '</h1>'
    	.'[/ts_modal_header]
    	[ts_modal_content]'
    	. $menu
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
</div>
</header>
