<?php
add_action('admin_menu', 'ch_essentials_admin');
function ch_essentials_admin() {

	register_setting('zang-settings-header', 'phone');
	register_setting('zang-settings-header', 'ytb');
	/* Social */
	register_setting('zang-settings-socials', 'fb_fixed');
	register_setting('zang-settings-socials', 'hotline_fixed');
	register_setting('zang-settings-socials', 'zalo_fixed');

	/* Base Menu */
	add_menu_page('Theme Option','ZQ Framework','manage_options','template_admin_zang','zang_theme_create_page',get_template_directory_uri() . '/images/setting_icon.png',110);
}
add_action('admin_init', 'zang_custom_settings');
function zang_custom_settings() { 

	/* Header Options Section */
	add_settings_section('zang-header-options', 'Chỉnh sửa header','zang_header_options_callback','zang-settings-header' );
	add_settings_field('address-hd','Số điện thoại', 'zang_phone_header','zang-settings-header', 'zang-header-options');
	add_settings_field('ytb','Link youtube', 'zang_ytb_header','zang-settings-header', 'zang-header-options');

	/* Social Options Section */
	add_settings_section('zang-social-options','Chỉnh sửa social','zang_social_options_callback','zang-settings-socials' );
	add_settings_field('hotline','Hotline', 'zang_hotline_fixed','zang-settings-socials', 'zang-social-options');
	add_settings_field('facebook','Facebook Link', 'zang_fb_fixed','zang-settings-socials', 'zang-social-options');
	add_settings_field('zalo','Zalo Link', 'zang_zalo_fixed','zang-settings-socials', 'zang-social-options');

}

function zang_header_options_callback(){
	echo '';
}

function zang_phone_header(){
	$phone = esc_attr(get_option('phone'));
	echo '<input type="text" class="iptext_adm" name="phone" value="'.$phone.'" >';
}

function zang_ytb_header(){
	$ytb = esc_attr(get_option('ytb'));
	echo '<input type="text" class="iptext_adm" name="ytb" value="'.$ytb.'" >';
}

function zang_address_header(){
	$address_header = esc_attr(get_option('address_header'));
	echo '<input type="text" class="iptext_adm" name="address_header" value="'.$address_header.'" placeholder="" ';
}
function zang_fb_fixed(){
	$fb_fixed = esc_attr(get_option('fb_fixed'));
	echo '<input type="text" class="iptext_adm" name="fb_fixed" value="'.$fb_fixed.'" placeholder="" ';
}
function zang_hotline_fixed(){
	$hotline_fixed = esc_attr(get_option('hotline_fixed'));
	echo '<input type="text" class="iptext_adm" name="hotline_fixed" value="'.$hotline_fixed.'" placeholder="" ';
}
function zang_zalo_fixed(){
	$zalo_fixed = esc_attr(get_option('zalo_fixed'));
	echo '<input type="text" class="iptext_adm" name="zalo_fixed" value="'.$zalo_fixed.'" placeholder="" ';
}

function shortcode_lunch(){
	ob_start();
	?>
	<ul class="products_home">
		<?php
		$args = array(
			'post_type'      => 'product',
			'posts_per_page' => 12,
			'tax_query'      => array(
				array(
					'taxonomy' => 'product_cat',
					'terms'    => 18,
				),
			),
		);
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

			<li class="pw">    
				<div class="product_inner">
					<div class="wrap_thumb">
						<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );  ?>
						<figure class="thumbnail" style="background:url('<?php echo $image[0]; ?>');"> 
							<a href="<?php the_permalink();?>"></a>
						</figure>	
					</div>
					<div class="wrap_info_bento">
						<div class="title_price">
							<h3><a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>"><?php the_title(); ?></a></h3>
							<div class="price">
								<span><?php echo $product->get_price_html(); ?></span>
							</div>
						</div>    
					</div>
					<?php // woocommerce_template_loop_add_to_cart( $loop->post, $product );  btn mua hang ?>
				</div>
			</li>

		<?php endwhile; ?>
		<?php wp_reset_query(); ?>
	</ul><!--/.products-->

	<?php
	return ob_get_clean();
}
add_shortcode('tg_shortcode_lunch','shortcode_lunch');


/* Display Page
-----------------------------------------------------------------*/
function zang_theme_create_page() {
	?>
	<div class="wrap">  
		<?php settings_errors(); ?>  

		<?php  
		$active_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'header_page_options';  
		?>  

		<ul class="nav-tab-wrapper"> 
			<li><a href="?page=template_admin_zang&tab=header_page_options" class="nav-tab <?php echo $active_tab == 'header_page_options' ? 'nav-tab-active' : ''; ?>">Header</a> </li>
			<li><a href="?page=template_admin_zang&tab=social_page_options" class="nav-tab <?php echo $active_tab == 'social_page_options' ? 'nav-tab-active' : ''; ?>">Social & Hotline </a></li>	
		</ul>  

		<form method="post" action="options.php">  
			<?php 
			if( $active_tab == 'header_page_options' ) {  
				settings_fields( 'zang-settings-header' );
				do_settings_sections( 'zang-settings-header' ); 
			} else if( $active_tab == 'social_page_options' ) {
				settings_fields( 'zang-settings-socials' );
				do_settings_sections( 'zang-settings-socials' ); 
			}
			else if( $active_tab == 'commit_page_options' ) {
				settings_fields( 'zang-settings-commit' );
				do_settings_sections( 'zang-settings-commit' ); 
			}
			?>             
			<?php submit_button(); ?>  
		</form> 

	</div> 

	<?php
}

