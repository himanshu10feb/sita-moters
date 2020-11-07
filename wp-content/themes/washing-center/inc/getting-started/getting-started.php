<?php
//about theme info
add_action( 'admin_menu', 'washing_center_gettingstarted' );
function washing_center_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'washing-center'), esc_html__('About Theme', 'washing-center'), 'edit_theme_options', 'washing_center_guide', 'washing_center_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function washing_center_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', get_template_directory_uri() . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'washing_center_admin_theme_style');

//guidline for about theme
function washing_center_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'washing-center' );

?>

<div class="wrapper-info">
	<div class="col-left">
		<div class="intro">
			<h3><?php esc_html_e( 'Welcome to Washing Center WordPress Theme', 'washing-center' ); ?> <span>Version: <?php echo esc_html($theme['Version']);?></span></h3>
		</div>
		<div class="started">
			<hr>
			<div class="free-doc">
				<div class="lz-4">
					<h4><?php esc_html_e( 'Start Customizing', 'washing-center' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Go to', 'washing-center' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'washing-center' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'washing-center' ); ?></span>
					</ul>
				</div>
				<div class="lz-4">
					<h4><?php esc_html_e( 'Support', 'washing-center' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Send your query to our', 'washing-center' ); ?> <a href="<?php echo esc_url( WASHING_CENTER_SUPPORT ); ?>" target="_blank" alt=""> <?php esc_html_e( 'Support', 'washing-center' ); ?></a></span>
					</ul>
				</div>
			</div>
			<p><?php esc_html_e( 'Washing center is a WordPress theme of premium category and is highly beneficial in case you are into the business of car washing or washing of any other automobile. Because of the splendid features associated with this theme, it has good application for the car was as well as the car services and besides this; it is good car AMC theme and has the advanced features for the servicing and washing the car. It is both responsive as well as multipurpose making it an exclusive one for the detailed auto servicing. Besides these features, it is minimal, elegant as well as sophisticated apart from being user friendly and armed with the Bootstrap framework and accompanied with the CTA[ call to action] button. It is professional to the core and has the personalization options making it good for the auto detail services as well as the car repair shop or the car paint shop. Since it came in the market, it did well in the popularity charts.  The Theme is also suitable for any small business like car rental, auto glass or for any handyman, serviceman or skilled workers like a car dealer, motorcycle mechanic or automotive technician.', 'washing-center')?></p>
			<hr>			
			<div class="col-left-inner">
				<h3><?php esc_html_e( 'Get started with Free Washing Center Theme', 'washing-center' ); ?></h3>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/customizer-image.png" alt="" />
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
			<h3><?php esc_html_e('Premium Theme Information', 'washing-center'); ?></h3>
			<hr>
		</div>
		<div class="centerbold">
			<a href="<?php echo esc_url( WASHING_CENTER_LIVE_DEMO ); ?>" target="_blank" alt=""><?php esc_html_e('Live Demo', 'washing-center'); ?></a>
			<a href="<?php echo esc_url( WASHING_CENTER_BUY_NOW ); ?>" target="_blank" alt=""><?php esc_html_e('Buy Pro', 'washing-center'); ?></a>
			<a href="<?php echo esc_url( WASHING_CENTER_PRO_DOCS ); ?>" target="_blank" alt=""><?php esc_html_e('Pro Documentation', 'washing-center'); ?></a>
			<hr class="secondhr">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/washing-center.jpg" alt="" />
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'washing-center'); ?></h3>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon01.png" alt="" />
			<h4><?php esc_html_e( 'Banner Slider', 'washing-center'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon02.png" alt="" />
			<h4><?php esc_html_e( 'Theme Options', 'washing-center'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon03.png" alt="" />
			<h4><?php esc_html_e( 'Custom Innerpage Banner', 'washing-center'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon04.png" alt="" />
			<h4><?php esc_html_e( 'Custom Colors and Images', 'washing-center'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon05.png" alt="" />
			<h4><?php esc_html_e( 'Fully Responsive', 'washing-center'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon06.png" alt="" />
			<h4><?php esc_html_e( 'Hide/Show Sections', 'washing-center'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon07.png" alt="" />
			<h4><?php esc_html_e( 'Woocommerce Support', 'washing-center'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon08.png" alt="" />
			<h4><?php esc_html_e( 'Limit to display number of Posts', 'washing-center'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon09.png" alt="" />
			<h4><?php esc_html_e( 'Multiple Page Templates', 'washing-center'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon10.png" alt="" />
			<h4><?php esc_html_e( 'Custom Read More link', 'washing-center'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon11.png" alt="" />
			<h4><?php esc_html_e( 'Code written with WordPress standard', 'washing-center'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon12.png" alt="" />
			<h4><?php esc_html_e( '100% Multi language', 'washing-center'); ?></h4>
		</div>
	</div>
</div>
<?php } ?>