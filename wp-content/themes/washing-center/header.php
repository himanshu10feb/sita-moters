<?php
/**
 * The header for our theme
 *
 * 
 * @subpackage washing-center
 * @since 1.0
 * @version 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
} else {
	do_action( 'wp_body_open' );
}	?>

<div id="page" class="site">
	<a class="screen-reader-text skip-link" href="#content"><?php esc_html_e( 'Skip to content', 'washing-center' ); ?></a>	

	<div class="header-box">
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4">
						<?php if( get_theme_mod( 'washing_center_phone_number') != '') { ?>
							<span><a href="mailto:<?php echo esc_url( get_theme_mod( 'washing_center_email_address','' ) ); ?>"><i class="fas fa-envelope"></i><?php echo esc_html( get_theme_mod( 'washing_center_email_address','' ) ); ?></a></span>
						<?php }?>
					</div>
					<div class="col-lg-3 col-md-3">
						<?php if( get_theme_mod( 'washing_center_phone_number') != '') { ?>
							<span><a href="tel:<?php echo esc_url( get_theme_mod( 'washing_center_phone_number','' ) ); ?>"><i class="fas fa-phone"></i><?php echo esc_html( get_theme_mod( 'washing_center_phone_number','' ) ); ?></a></span>
						<?php }?>
					</div>
					<div class="col-lg-5 col-md-5">
						<div class="social-icons">
							<?php if( get_theme_mod( 'washing_center_facebook_url') != '') { ?>
					      		<a href="<?php echo esc_url( get_theme_mod( 'washing_center_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','washing-center' );?></span></a>
						    <?php } ?>
						    <?php if( get_theme_mod( 'washing_center_twitter_url') != '') { ?>
						      	<a href="<?php echo esc_url( get_theme_mod( 'washing_center_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','washing-center' );?></span></a>
						    <?php } ?>
						    <?php if( get_theme_mod( 'washing_center_insta_url') != '') { ?>
						      	<a href="<?php echo esc_url( get_theme_mod( 'washing_center_insta_url','' ) ); ?>"><i class="fab fa-instagram"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','washing-center' );?></span></a>
						    <?php } ?>
						    <?php if( get_theme_mod( 'washing_center_linkedin_url') != '') { ?>
					     		<a href="<?php echo esc_url( get_theme_mod( 'washing_center_linkedin_url','' ) ); ?>"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','washing-center' );?></span></a>
						    <?php } ?>	 
						    <?php if( get_theme_mod( 'washing_center_pinterest_url') != '') { ?>
						      	<a href="<?php echo esc_url( get_theme_mod( 'washing_center_pinterest_url','' ) ); ?>"><i class="fab fa-pinterest-p"></i><span class="screen-reader-text"><?php esc_html_e( 'Pinterest','washing-center' );?></span></a>
						    <?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="top-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-5 col-9">
						<div class="logo">
					        <?php if ( has_custom_logo() ) : ?>
						        <div class="site-logo"><?php the_custom_logo(); ?></div>
						    <?php endif; ?>
				            <?php if (get_theme_mod('washing_center_show_site_title',true)) {?>
						        <?php $blog_info = get_bloginfo( 'name' ); ?>
						        <?php if ( ! empty( $blog_info ) ) : ?>
						            <?php if ( is_front_page() && is_home() ) : ?>
							            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html(bloginfo( 'name' )); ?></a></h1>
						        	<?php else : ?>
					            		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html(bloginfo( 'name' )); ?></a></p>
						            <?php endif; ?>
						        <?php endif; ?>
						    <?php }?>
				        	<?php if (get_theme_mod('washing_center_show_tagline',true)) {?>
						        <?php
						        $description = get_bloginfo( 'description', 'display' );
						        if ( $description || is_customize_preview() ) :
						          ?>
							        <p class="site-description">
							            <?php echo esc_html($description); ?>
							        </p>
						        <?php endif; ?>
						    <?php }?>
					    </div>
					</div>
					<div class="col-lg-9 col-md-7 col-3">
						<header id="header" class="menu-section">
							<div class="toggle-menu responsive-menu">
					            <button onclick="washing_center_open()" role="tab" class="mobile-menu"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','washing-center'); ?></span></button>
					        </div>
							<div id="sidelong-menu" class="nav sidenav">
				                <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'washing-center' ); ?>">
				                  	<?php 
				                    wp_nav_menu( array( 
				                      'theme_location' => 'primary',
				                      'container_class' => 'main-menu-navigation clearfix' ,
				                      'menu_class' => 'clearfix',
				                      'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
				                      'fallback_cb' => 'wp_page_menu',
				                    ) ); 
				                  	?>
				                  	<a href="javascript:void(0)" class="closebtn responsive-menu" onclick="washing_center_close()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','washing-center'); ?></span></a>
				                </nav>
				            </div>
						</header>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="site-content-contain">
		<div id="content" class="site-content">