<?php
/**
* The header for our theme.
*
* Displays all of the <head> section and everything up till <div id="content">
*
* @package andromeda
*/

$options = get_option('vslmd_options');
global $woocommerce; 

//Variables > Theme Options
$brand_scheme = isset( $options['brand_scheme'] ) ? $options['brand_scheme'] : '3';
$brand_site_title = isset( $options['brand_site_title'] ) ? $options['brand_site_title'] : get_bloginfo( 'name' );
$nav_position = isset( $options['nav_position'] ) ? $options['nav_position'] : 'horizontal-nav';
$header_color_scheme = isset( $options['header_color_scheme'] ) ? $options['header_color_scheme'] : 'light navbar-light';
$header_navbar_color = isset( $options['header_navbar_color'] ) ? $options['header_navbar_color'] : '';
$sticky_menu = $options['sticky_menu'] == 1 ? 'sticky-navigation' : '';
$side_navigation = isset( $options['side_navigation'] ) ? $options['side_navigation'] : '';
$boxed_or_stretched = isset( $options['boxed_or_stretched'] ) ? $options['boxed_or_stretched'] : 'stretched-layout';
$boxed_or_stretched_header = isset( $options['boxed_or_stretched_header'] ) ? $options['boxed_or_stretched_header'] : 'container';
$navigation_collapsed = isset( $options['navigation_collapsed'] ) ? $options['navigation_collapsed'] : 'navbar-expand-lg';
$header_height = isset( $options['header_height'] ) ? $options['header_height'] : 'header-medium';
$header_layout = isset( $options['header_layout'] ) ? $options['header_layout'] : '2';
$top_header = isset( $options['top_header'] ) ? $options['top_header'] : '1';
$top_header_columns = isset( $options['top_header_columns'] ) ? $options['top_header_columns'] : '1';
$extra_custom_post_types = isset( $options['extra-custom-post-types'] ) ? $options['extra-custom-post-types'] : '';
$alert_message_switch = isset( $options['alert_message_switch'] ) ? $options['alert_message_switch'] : '';
$post_type_share_switch = isset( $options['post_type_share_switch'] ) ? $options['post_type_share_switch'] : '';
$custom_analytics = isset( $options['custom_analytics'] ) ? $options['custom_analytics'] : '';
$custom_css = isset( $options['custom_css'] ) ? $options['custom_css'] : '';
$custom_javascript = isset( $options['custom_javascript'] ) ? $options['custom_javascript'] : '';
$page_404 = isset( $options['404_switch'] ) ? $options['404_switch'] : '';

//Brand

$brand_retina = '';

if ($brand_scheme != '1') {
	
	if ($brand_scheme == '2' || $brand_scheme == '3') {

		$brand_image = isset( $options['brand_image']['url'] ) ? $options['brand_image']['url'] : '';
		$brand_light = isset( $options['brand_light']['url'] ) ? $options['brand_light']['url'] : '';
		$brand_dark = isset( $options['brand_dark']['url'] ) ? $options['brand_dark']['url'] : '';
		$brand_mobile = isset( $options['brand_mobile']['url'] ) ? $options['brand_mobile']['url'] : '';
		
	}
	
	elseif ($brand_scheme == '4' || $brand_scheme == '5') {
		
		$brand_retina = 'brand-retina';

		$brand_image = isset( $options['brand_retina_image']['url'] ) ? $options['brand_retina_image']['url'] : '';
		$brand_light = isset( $options['brand_retina_light']['url'] ) ? $options['brand_retina_light']['url'] : '';
		$brand_dark = isset( $options['brand_retina_dark']['url'] ) ? $options['brand_retina_dark']['url'] : '';
		$brand_mobile = isset( $options['brand_retina_mobile']['url'] ) ? $options['brand_retina_mobile']['url'] : '';
		
	}
	
	// Alt Text

	$brand_image_id = isset( $options['brand_image']['id'] ) ? $options['brand_image']['id'] : '';
	$brand_light_id = isset( $options['brand_light']['id'] ) ? $options['brand_light']['id'] : '';
	$brand_dark_id = isset( $options['brand_dark']['id'] ) ? $options['brand_dark']['id'] : '';
	$brand_mobile_id = isset( $options['brand_mobile']['id'] ) ? $options['brand_mobile']['id'] : '';
	
	$brand_image_alt = $brand_image_id && $alt = get_post_meta($brand_image_id, '_wp_attachment_image_alt', true) ? 'alt="' . esc_attr($alt) . '"' : '';
	$brand_light_alt = $brand_light_id && $alt = get_post_meta($brand_light_id, '_wp_attachment_image_alt', true) ? 'alt="' . esc_attr($alt) . '"' : '';
	$brand_dark_alt = $brand_dark_id && $alt = get_post_meta($brand_dark_id, '_wp_attachment_image_alt', true) ? 'alt="' . esc_attr($alt) . '"' : '';
	$brand_mobile_alt = $brand_mobile_id && $alt = get_post_meta($brand_mobile_id, '_wp_attachment_image_alt', true) ? 'alt="' . esc_attr($alt) . '"' : '';

}

//Header Menu(s) Position


if (strpos($navigation_collapsed, 'sm') !== false) {
	$primary_remove = 'd-sm-none';
	$secondary_remove = 'd-none d-sm-block';
	$responsive_collapsing = 'responsive-collapsing-sm';
} elseif (strpos($navigation_collapsed, 'md') !== false) {
	$primary_remove = 'd-md-none';
	$secondary_remove = 'd-none d-md-block';
	$responsive_collapsing = 'responsive-collapsing-md';
} elseif (strpos($navigation_collapsed, 'lg') !== false) {
	$primary_remove = 'd-lg-none';
	$secondary_remove = 'd-none d-lg-block';
	$responsive_collapsing = 'responsive-collapsing-lg';
} elseif (strpos($navigation_collapsed, 'xl') !== false) {
	$primary_remove = 'd-xl-none';
	$secondary_remove = 'd-none d-xl-block';
	$responsive_collapsing = 'responsive-collapsing-xl';
} elseif (strpos($navigation_collapsed, 'never') !== false) {
	$primary_remove = '';
	$secondary_remove = 'd-none';
	$responsive_collapsing = 'responsive-collapsed';
}

$navbar_position = '';  
if ($header_layout == '1') {
	$navbar_position = 'justify-content-start';    
	$main_navigation_remove = '';
} else if ($header_layout == '2') {
	$navbar_position = 'justify-content-end';  
	$main_navigation_remove = '';   
} else if ($header_layout == '3') {
	$navbar_position_left = 'justify-content-end'; 
	$navbar_position_right = 'justify-content-start'; 
	$main_navigation_remove = $primary_remove;    
} else if ($header_layout == '4') {
	$navbar_position_left = 'justify-content-start'; 
	$navbar_position_right = 'justify-content-end';  
	$main_navigation_remove = $primary_remove;     
} else if ($header_layout == '5') {   
	$main_navigation_remove = $primary_remove;    
}


if ( $page_404 == '1' && is_404() ) {
	
	//Variables > 404 Theme Options
	$custom_header_title_height = $options['404_custom_header_title_height'] ?: 'medium';
	$title_editor = $options['404_title_editor'];
	$caption_editor = $options['404_caption_editor'];
	$layout_header_title = $options['404_layout_header_title'];
	$header_title_color_overlay = ( !empty($options['404_header_title_color_overlay']['rgba']) ) ? 'custom-color' : 'preset-color';
	$header_title_color_overlay_mode = $header_title_color_overlay.'-layout-header-title-mode-'.$layout_header_title;
	$slider_rev_header = $options['404_slider_rev_header'];
	$menu_overlay_switch = $options['404_menu_overlay_switch'] ?: 'no-overlay';
	$change_menu = 'primary';
	$layout_structure = '4';
	
} elseif ( is_singular() ) {
	
	//Variables > Page Options
	$custom_header_title_height = redux_post_meta( "vslmd_options", $post->ID, "custom_header_title_height" ) ?: 'medium';
	$layout_structure = redux_post_meta( "vslmd_options", $post->ID, "layout_structure" ) ?: '4';  
	$title_editor = redux_post_meta( "vslmd_options", $post->ID, "title_editor" );
	$caption_editor = redux_post_meta( "vslmd_options", $post->ID, "caption_editor" );
	$layout_header_title = redux_post_meta( "vslmd_options", $post->ID, "layout_header_title" );
	$header_title_color_overlay = ( !empty(redux_post_meta( "vslmd_options", $post->ID, "header_title_color_overlay" )['rgba']) ) ? 'custom-color' : 'preset-color';
	$header_title_color_overlay_mode = $header_title_color_overlay.'-layout-header-title-mode-'.$layout_header_title;
	$slider_rev_header = redux_post_meta( "vslmd_options", $post->ID, "slider_rev_header" );
	$menu_overlay_switch = redux_post_meta( "vslmd_options", $post->ID, "menu_overlay_switch" ) ?: 'no-overlay';
	$change_menu = redux_post_meta( "vslmd_options", $post->ID, "change_menu" ) ?: 'primary';
	
} elseif ( $woocommerce && is_shop() ) {
	
	//Variables > WooCommerce Theme Options
	$custom_header_title_height = $options['woo_custom_header_title_height'] ?: 'medium';
	$title_editor = $options['woo_title_editor'];
	$caption_editor = $options['woo_caption_editor'];
	$layout_header_title = $options['woo_layout_header_title'];
	$header_title_color_overlay = ( !empty($options['woo_header_title_color_overlay']['rgba']) ) ? 'custom-color' : 'preset-color';
	$header_title_color_overlay_mode = $header_title_color_overlay.'-layout-header-title-mode-'.$layout_header_title;
	$slider_rev_header = $options['woo_slider_rev_header'];
	$menu_overlay_switch = $options['woo_menu_overlay_switch'] ?: 'no-overlay';
	$change_menu = 'primary';
	$layout_structure = '4';
	
} else {
	
	$change_menu = 'primary';
	$layout_structure = '4';
	$layout_header_title = '1';
	$header_title_color_overlay_mode = '';
	$menu_overlay_switch = 'no-overlay';
	
}

/* Menu Overlay Switch Compatibility (Transient) */

$menu_overlay_switch_compatibility = ($menu_overlay_switch == 'default-colors-overlay' || $menu_overlay_switch == 'light-colors-overlay' || $menu_overlay_switch == 'dark-colors-overlay') ? 'colors-overlay-enabled' : '';


/* Menu Overlay Switch No Header Title */

$layout_header_title_info = 
    ($layout_header_title == '1' && $menu_overlay_switch != 'no-overlay') ? 'header-title-disabled' : 
    (($layout_header_title == '1' && $menu_overlay_switch == 'no-overlay') || ($layout_header_title == '2' && (empty($title_editor) && empty($caption_editor))) ? 'header-title-disabled-no-overlay' : '');


/* Top Header Color Scheme */

if (strpos($header_color_scheme, 'bg-white') !== false ) {
	$top_header_scheme = 'light bg-white';
	$top_header_scheme_body = 'light-colors-nav';
	$header_navbar_color = '';
}elseif (strpos($header_color_scheme, 'light') !== false) {
	$top_header_scheme = 'light bg-light';
	$top_header_scheme_body = 'light-colors-nav';
	$header_navbar_color = '';
} elseif (strpos($header_color_scheme, 'dark') !== false) {
	$top_header_scheme = 'dark bg-dark';
	$top_header_scheme_body = 'dark-colors-nav';
	$header_navbar_color = '';
}

if ($header_color_scheme == 'navbar-custom') {
	
	if ($header_navbar_color == 'navbar-light') {
		$top_header_scheme = 'light';
		$top_header_scheme_body = 'light-colors-nav';
	} elseif ($header_navbar_color == 'navbar-dark') {
		$top_header_scheme = 'dark';
		$top_header_scheme_body = 'dark-colors-nav';
	}
	
}

//Show Header Top

if ($top_header == '1') {
	$show_top_header = 'd-none';
} elseif ($top_header == '2') {
	if ($navigation_collapsed == 'navbar-expand-sm') {  
		$show_top_header = 'd-sm-none d-md-none d-lg-none d-xl-none';
	} elseif ($navigation_collapsed == 'navbar-expand-md') {  
		$show_top_header = 'd-md-none d-lg-none d-xl-none';
	} elseif ($navigation_collapsed == 'navbar-expand-lg') {  
		$show_top_header = 'd-lg-none d-xl-none';
	} elseif ($navigation_collapsed == 'navbar-expand-xl') {  
		$show_top_header = 'd-xl-none';
	} elseif ($navigation_collapsed == 'navbar-expand-never') {  
		$show_top_header = 'd-block';
	}
} elseif ($top_header == '3') {
	if ($navigation_collapsed == 'navbar-expand-sm') {  
		$show_top_header = 'd-none d-sm-block d-md-block d-lg-block d-xl-block';
	} elseif ($navigation_collapsed == 'navbar-expand-md') {  
		$show_top_header = 'd-none d-sm-none d-md-block d-lg-block d-xl-block';
	} elseif ($navigation_collapsed == 'navbar-expand-lg') {  
		$show_top_header = 'd-none d-sm-none d-md-none d-lg-block d-xl-block';
	} elseif ($navigation_collapsed == 'navbar-expand-xl') {  
		$show_top_header = 'd-none d-sm-none d-md-none d-lg-none d-xl-block';
	} elseif ($navigation_collapsed == 'navbar-expand-never') {  
		$show_top_header = 'd-none';
	}
} else {  
	$show_top_header = 'd-block';
}


/* Add static classes on body */

add_filter( 'body_class', function( $classes ) {
	return array_merge( $classes, array( 'desktop-mode' ) );
} );

?> 

<!-- ******************* Variables > Run End ******************* -->

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<!-- Custom CSS -->
	<?php if(!empty($custom_css)) echo '<style type="text/css">'. $custom_css .'</style>'; ?> 
	<!-- Custom JS -->
	<?php if(!empty($custom_javascript)) echo '<script type="text/javascript">'. $custom_javascript .'</script>'; ?> 
	<!-- Google Analytics -->
	<?php if(!empty($custom_analytics)) echo $custom_analytics; ?> 

	<!-- Share Content Scripts -->
	<?php if( $post_type_share_switch == '1' && isset($options['post_type_share']) ) { 
		if(in_array(get_post_type(), $options['post_type_share'])) {
			get_template_part('vslmd/share/share');
		}
	} ?>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<meta http-equiv="x-dns-prefetch-control" content="on">
	<link rel="dns-prefetch" href="//fonts.googleapis.com">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class('visualmodo-theme '.$menu_overlay_switch .' '. $layout_header_title_info .' '. $menu_overlay_switch_compatibility .' '. $nav_position .' '. $top_header_scheme_body .' '. $responsive_collapsing); ?>>

	<?php if($alert_message_switch == '1') { get_template_part('module-templates/alert-message'); } ?>
	<?php if($side_navigation != '') { get_template_part('widget-templates/side-navigation'); } ?>

	<?php if($layout_structure == '3' || $layout_structure == '4') { ?>
		
		<div class="hfeed site <?php echo $boxed_or_stretched; ?>" id="page">
			
			<!-- Top header -->
			
			<?php if( $top_header_columns >= '2' ){ ?> 
				
				<div class="header-top <?php echo $top_header_scheme .' '. $show_top_header; ?>">
					
					<div class="<?php echo $boxed_or_stretched_header; ?>">
						
						<div class="row align-items-center">
							<?php get_template_part('widget-templates/top-header'); ?>
						</div>
						
					</div>
					
				</div>
				
			<?php } ?> 
			
			<!-- Top header end -->
			
			<!-- ******************* The Navbar Area ******************* -->
			<div class="wrapper-fluid wrapper-navbar horizontal-header <?php echo $sticky_menu; ?>" id="wrapper-navbar">
				
				<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content',
				'vslmd' ); ?></a>
				
				<nav class="navbar header-bottom <?php echo $header_color_scheme .' '. $header_navbar_color .' '. $navigation_collapsed .' '. $header_height .' '. $main_navigation_remove; ?>">
					<div class="<?php echo $boxed_or_stretched_header; ?>">
						
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						
						<!-- Your site title as branding in the menu -->
						<a class="navbar-brand mb-0 <?php echo $brand_retina; ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							
							<?php if($brand_scheme == '1' || empty($brand_image)){ 
								echo $brand_site_title; 
							} elseif($brand_scheme == '2' || $brand_scheme == '4'){ ?>
								<?php if(!empty($brand_image)){ ?> <img class="brand-default" src='<?php echo $brand_image; ?>' <?php echo $brand_image_alt; ?>> <?php } ?>
								<?php if(!empty($brand_light)){ ?> <img class="brand-light" src='<?php echo $brand_light; ?>' <?php echo $brand_light_alt; ?>> <?php } ?>
								<?php if(!empty($brand_dark)){ ?> <img class="brand-dark" src='<?php echo $brand_dark; ?>' <?php echo $brand_dark_alt; ?>> <?php } ?>
								<?php if(!empty($brand_mobile)){ ?> <img class="brand-mobile" src='<?php echo $brand_mobile; ?>' <?php echo $brand_mobile_alt; ?>> <?php } 
								echo $brand_site_title;
							} else { ?>
								<?php if(!empty($brand_image)){ ?> <img class="brand-default" src='<?php echo $brand_image; ?>' <?php echo $brand_image_alt; ?>> <?php } ?>
								<?php if(!empty($brand_light)){ ?> <img class="brand-light" src='<?php echo $brand_light; ?>' <?php echo $brand_light_alt; ?>> <?php } ?>
								<?php if(!empty($brand_dark)){ ?> <img class="brand-dark" src='<?php echo $brand_dark; ?>' <?php echo $brand_dark_alt; ?>> <?php } ?>
								<?php if(!empty($brand_mobile)){ ?> <img class="brand-mobile" src='<?php echo $brand_mobile; ?>' <?php echo $brand_mobile_alt; ?>> <?php }
							} ?>
							
						</a>

						<div class="extra-elements extra-elements__mobile"><?php get_template_part('module-templates/nav-extra-elements'); ?></div>
						
						<!-- The WordPress Menu goes here -->
						<?php wp_nav_menu(
							array(
								'theme_location' => $change_menu,
								'container_class' => 'collapse navbar-collapse '.$navbar_position,
								'container_id'    => 'navbarNavDropdown',
								'menu_class'      => 'navbar-nav',
								'fallback_cb'     => '',
								'menu_id'         => 'main-menu',
								'walker'          => new WP_Bootstrap_Navwalker(),
							)
						); ?>
						
						<div class="extra-elements extra-elements__desktop"><?php get_template_part('module-templates/nav-extra-elements'); ?></div>
					</div><!-- .container -->
					
				</nav><!-- .site-navigation -->
				
				<?php if ($header_layout == '3' || $header_layout == '4') { ?>

					<?php	$centered_header_right_menu_inner = ($header_layout == '3') ? 'justify-content-between' : 'justify-content-end'; ?>
					
					<nav class="navbar header-bottom centered-header <?php echo $header_color_scheme .' '. $header_navbar_color .' '. $navigation_collapsed .' '. $header_height .' '. $secondary_remove; ?>">
						
						<div class="<?php echo $boxed_or_stretched_header; ?>">
							
							<!-- The WordPress Menu goes here -->
							
							<div class="collapse navbar-collapse navbar-responsive-collapse centered-header-menu">
								
								<div class="centered-header-left-menu">
									
									<?php wp_nav_menu(
										array(
											'theme_location'  => 'left_menu',
											'menu_class'      => 'navbar-nav '.$navbar_position_left,
											'fallback_cb'     => '',
											'menu_id'         => 'main-menu',
											'walker'          => new WP_Bootstrap_Navwalker(),
										)
									); ?>
									
								</div>
								
								<div class="navbar-header">
									
									<!-- Your site title as branding in the menu -->
									<a class="navbar-brand mb-0 <?php echo $brand_retina; ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
										
										<?php if($brand_scheme == '1' || empty($brand_image)){ 
											echo $brand_site_title; 
										} elseif($brand_scheme == '2' || $brand_scheme == '4'){ ?>
											<?php if(!empty($brand_image)){ ?> <img class="brand-default" src='<?php echo $brand_image; ?>' <?php echo $brand_image_alt; ?>> <?php } ?>
											<?php if(!empty($brand_light)){ ?> <img class="brand-light" src='<?php echo $brand_light; ?>' <?php echo $brand_light_alt; ?>> <?php } ?>
											<?php if(!empty($brand_dark)){ ?> <img class="brand-dark" src='<?php echo $brand_dark; ?>' <?php echo $brand_dark_alt; ?>> <?php } ?>
											<?php if(!empty($brand_mobile)){ ?> <img class="brand-mobile" src='<?php echo $brand_mobile; ?>' <?php echo $brand_mobile_alt; ?>> <?php } 
											echo $brand_site_title;
										} else { ?>
											<?php if(!empty($brand_image)){ ?> <img class="brand-default" src='<?php echo $brand_image; ?>' <?php echo $brand_image_alt; ?>> <?php } ?>
											<?php if(!empty($brand_light)){ ?> <img class="brand-light" src='<?php echo $brand_light; ?>' <?php echo $brand_light_alt; ?>> <?php } ?>
											<?php if(!empty($brand_dark)){ ?> <img class="brand-dark" src='<?php echo $brand_dark; ?>' <?php echo $brand_dark_alt; ?>> <?php } ?>
											<?php if(!empty($brand_mobile)){ ?> <img class="brand-mobile" src='<?php echo $brand_mobile; ?>' <?php echo $brand_mobile_alt; ?>> <?php }
										} ?>
										
									</a>
									
								</div>
								
								<div class="centered-header-right-menu">
									
									<div class="centered-header-right-menu-inner d-flex <?php echo $centered_header_right_menu_inner; ?>">

										<div class="extra-elements extra-elements__mobile"><?php get_template_part('module-templates/nav-extra-elements'); ?></div>
										
										<?php wp_nav_menu(
											array(
												'theme_location'  => 'right_menu',
												'menu_class'      => 'navbar-nav '.$navbar_position_right,
												'fallback_cb'     => '',
												'menu_id'         => 'main-menu',
												'walker'          => new WP_Bootstrap_Navwalker(),
											)
										); ?>

										<div class="extra-elements extra-elements__desktop"><?php get_template_part('module-templates/nav-extra-elements'); ?></div>
										
									</div>
									
								</div>
								
							</div>
							
						</div> <!-- .container -->
						
					</nav><!-- .navbar -->
					
				<?php } else if ($header_layout == '5') { ?>
					
					<nav class="navbar header-bottom centered-under <?php echo $header_color_scheme .' '. $header_navbar_color .' '. $navigation_collapsed .' '. $header_height .' '. $secondary_remove; ?>">
						
						<div class="<?php echo $boxed_or_stretched_header; ?>">
							
							<!-- The WordPress Menu goes here -->
							
							<div class="centered-header-menu-under col">
								
								<div class="centered-header-top">
									
									<div class="container">
										
										<div class="row no-gutters">
											
											<div class="col-md-6 offset-md-3">
												
												<div class="navbar-header text-center">
													
													<!-- Your site title as branding in the menu -->
													<a class="navbar-brand m-0 <?php echo $brand_retina; ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
														
														<?php if($brand_scheme == '1' || empty($brand_image)){ 
															echo $brand_site_title; 
														} elseif($brand_scheme == '2' || $brand_scheme == '4'){ ?>
															<?php if(!empty($brand_image)){ ?> <img class="brand-default" src='<?php echo $brand_image; ?>' <?php echo $brand_image_alt; ?>> <?php } ?>
															<?php if(!empty($brand_light)){ ?> <img class="brand-light" src='<?php echo $brand_light; ?>' <?php echo $brand_light_alt; ?>> <?php } ?>
															<?php if(!empty($brand_dark)){ ?> <img class="brand-dark" src='<?php echo $brand_dark; ?>' <?php echo $brand_dark_alt; ?>> <?php } ?>
															<?php if(!empty($brand_mobile)){ ?> <img class="brand-mobile" src='<?php echo $brand_mobile; ?>' <?php echo $brand_mobile_alt; ?>> <?php } 
															echo $brand_site_title;
														} else { ?>
															<?php if(!empty($brand_image)){ ?> <img class="brand-default" src='<?php echo $brand_image; ?>' <?php echo $brand_image_alt; ?>> <?php } ?>
															<?php if(!empty($brand_light)){ ?> <img class="brand-light" src='<?php echo $brand_light; ?>' <?php echo $brand_light_alt; ?>> <?php } ?>
															<?php if(!empty($brand_dark)){ ?> <img class="brand-dark" src='<?php echo $brand_dark; ?>' <?php echo $brand_dark_alt; ?>> <?php } ?>
															<?php if(!empty($brand_mobile)){ ?> <img class="brand-mobile" src='<?php echo $brand_mobile; ?>' <?php echo $brand_mobile_alt; ?>> <?php }
														} ?>
														
													</a>
													
												</div>
												
											</div>
											
											<div class="col-md-3">
												<div class="extra-elements"><?php get_template_part('module-templates/nav-extra-elements'); ?></div>
											</div>
											
										</div>
										
									</div>
									
								</div>
								
								<div class="centered-header-bottom">
									
									<?php wp_nav_menu(
										array(
											'theme_location' => $change_menu,
											'menu_class'      => 'navbar-nav justify-content-center',
											'fallback_cb'     => '',
											'menu_id'         => 'main-menu',
											'walker'          => new WP_Bootstrap_Navwalker(),
										)
									); ?>
									
								</div>
								
							</div>
							
						</div> <!-- .container -->
						
					</nav><!-- .navbar -->
					
				<?php } ?>
				
			</div><!-- .wrapper-navbar end -->
			
			<!-- Jumbotron -->
			
			<?php if( $layout_header_title != '1' ) { ?>
				
				<?php if( ($layout_header_title == '2' || $layout_header_title == '3') && ( !empty($title_editor) || !empty($caption_editor) ) ) { ?>
					
					<section class="header-presentation <?php echo $custom_header_title_height; ?>">
						<div class="hp-background-color <?php echo $header_title_color_overlay_mode; ?>">
							<div class="container"> 
								<div class="hp-content">
									<?php if( $title_editor != ''){
										echo '<h1>' . $title_editor . '</h1>';
									}
									if( $caption_editor != ''){
										echo '<p>' . $caption_editor . '</p>';
									} ?>
								</div>
							</div> 
						</div>  
					</section><!-- Header Presentation end -->
					
				<?php } else if( ($layout_header_title == '2' || $layout_header_title == '3') && is_singular( 'post' ) ) { ?>
					
					<section class="header-presentation <?php echo $custom_header_title_height; ?>">
						<div class="hp-background-color <?php echo $header_title_color_overlay_mode; ?>">
							<div class="container"> 
								<div class="hp-content">
									<?php if( $title_editor != ''){
										echo '<h1>' . $title_editor . '</h1>';
									} else {
										the_title( '<h1>', '</h1>' );
									}
									if( $caption_editor != ''){
										echo '<p>' . $caption_editor . '</p>';
									} ?>
								</div>
							</div> 
						</div>  
					</section><!-- Header Presentation end -->
					
				<?php } else if( $layout_header_title == '4' ) {
					
					if ( $slider_rev_header && class_exists( 'RevSlider' ) ) { ?>
						
						<section class="hp-slider-revolution">
							<?php putRevSlider($slider_rev_header) ?>
						</section><!-- Slider end -->
						
					<?php } else { ?>
						
						<div class="container">
							
							<div class="row" style="padding: 100px 0;">
								<div class="alert alert-warning alert-dismissible" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<strong><?php _e( 'No Slider Found!', 'vslmd' ); ?></strong> <?php _e( 'Please go to your page editor area and apply your slider show build with revolution slider on Page Options > Layout > Slider Revolution.', 'vslmd' ); ?>
								</div>
							</div>
							
						</div><!-- Alert end -->
						
					<?php } ?>
					
				<?php } else if( $layout_header_title == '5' ) { ?>
					
					<section class="header-presentation simple-slider">
						<div id="galleryCarousel" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<?php
								$i = 0;
								foreach(redux_post_meta( "vslmd_options", $post->ID, "simple_slider" ) as $slide) {
									if($i == 0){ $class_active = 'class="active"';} else { $class_active = ''; } 
									?><li data-target="#galleryCarousel" data-slide-to="<?php echo $i; ?>"<?php echo $class_active; ?>></li><?php             
									$i++;
								}
								?>
							</ol>
							<div class="carousel-inner">
								<?php
								$s = 0;
								foreach(redux_post_meta( "vslmd_options", $post->ID, "simple_slider" ) as $slide) {
									if($s == 0){ $item_active = ' active';} else { $item_active = ''; } ?>
									<div class="carousel-item<?php echo $item_active; ?>">
										<img src="<?php echo $slide['image']; ?>" alt="<?php echo $slide['title']; ?>">
										<div class="carousel-caption hp-content"> 
											<?php if( $slide['title'] != ''){
												echo '<h1>' . $slide['title'] . '</h1>';
											}
											if( $slide['description'] != ''){
												echo '<p>' . $slide['description'] . '</p>';
											} ?>
										</div> 
									</div>
									
									<?php $s++;
								}
								?>   
							</div>
							<a class="carousel-control-prev" href="#galleryCarousel" role="button" data-slide="prev">
								<span class="icon-prev" aria-hidden="true"><i class="fa fa-angle-left"></i></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#galleryCarousel" role="button" data-slide="next">
								<span class="icon-next" aria-hidden="true"><i class="fa fa-angle-right"></i></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
						
					</section>
					
				<?php } ?>
				
				<?php } ?> <!-- Jumbotron -->
				<?php } ?> <!-- Header condition end -->
				<?php if($nav_position == 'vertical-nav') { get_template_part('module-templates/vertical-header'); } ?> <!-- Vertical Header -->
				