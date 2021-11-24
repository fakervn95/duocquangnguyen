<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?></title>

	<link rel="shortcut icon" href="<?php echo BASE_URL; ?>/images/favicon.ico">
	<!-- css -->
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/slick.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/animate.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/style.css">
	<!-- js -->
	<script src="<?php echo BASE_URL; ?>/js/jquery.min.js"></script>
	<script src="<?php echo BASE_URL; ?>/js/slick.js"></script>
	<?php wp_head(); ?>
</head>


<body <?php body_class() ?>>
	<div class="bg_opacity"></div>
	<?php if ( wp_is_mobile() ) { ?>
		<div id="menu_mobile_full">
			<nav class="mobile-menu">
				<p class="close_menu"><span><i class="fa fa-times" aria-hidden="true"></i></span></p>
				<?php 
				$args = array('theme_location' => 'menu_mobile');
				?>
				<?php wp_nav_menu($args);?>
			</nav>
		</div>
	<?php }?>
	<header class="header">
		<div class="top_header">
			<div class="container">
				<div class="phone_search_hd">
					<div class="ytb_header">
						<a href="<?php echo get_option('ytb'); ?>" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
					</div>
					<div class="search_header">
						<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
							<input type="text" name="s" id="s" value="<?php the_search_query(); ?>" placeholder="" />
							<input type="submit" id="searchsubmit" value="Tìm kiếm">
						</form>
					</div>
					<div class="cart_login">
						<div class="g_cart">
							<?php global $woocommerce; ?>
							<a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('Xem giỏ hàng', 'woothemes'); ?>">
								<i class="fa fa-shopping-cart" aria-hidden="true"></i>
								<span class="amount_pdc"><?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?></span> 
							</a>
							<div class="header-quickcart">
								<?php woocommerce_mini_cart(); ?>
							</div>

						</div>
					</div>
					<?php if(get_option('phone')){ ?>
						<div class="phone_hd">
							<a href="tel:<?php echo get_option('phone'); ?>"><?php echo get_option('phone'); ?></a>
						</div>
					<?php }?>
					
				</div>
			</div>
			<span class="icon_mobile_click"><i class="fa fa-bars" aria-hidden="true"></i></span>
		</div>
		<div class="middle_header">
			<div class="container">
				<div class="logo_site">
					<?php 
					if(has_custom_logo()){
						the_custom_logo();
					}
					else { ?> 
						<h2><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h2>
					<?php } ?>
				</div>
				<div class="slogan_qn">
					<p>Sản phẩm mang giá trị từ thiên nhiên</p>
				</div>
				<nav class="nav nav_primary">
					<?php 
					$args = array('theme_location' => 'primary');
					?>
					<?php wp_nav_menu($args); ?>
				</nav>
			</div>
		</div>
		<?php if(is_front_page() && !is_home()){ ?>
			<div class="bottom_header">
				<?php echo do_shortcode('[metaslider id="15"]'); ?>
			</div>	
			
		<?php }?>
	</header>