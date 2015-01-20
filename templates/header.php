<header class="header" role="banner">
  <div id="nav">
    

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
    
    <a id="menu" href="#"><i class="fa fa-reorder"></i></a>

    
  
  </div>
  <div id="page-header">
    <h1>
      <?php echo roots_title(); ?>
    </h1>
  </div>
</header>
