<footer class="footer">
	<div class="top_footer">
		<div class="container">
			 <?php
        $args = array(
          'post_type' => 'page',
          'post__in' => array(106) //list of page_ids
        );
        $page_query = new WP_Query( $args );
        if( $page_query->have_posts() ) :
        //print any general title or any header here//
        while( $page_query->have_posts() ) : $page_query->the_post();
        echo '<div class="page-on-page" id="page_id-' . $post->ID . '">';
        echo the_content();
        echo '</div>';
        endwhile;
        else:
        //optional text here is no pages found//
        endif;
        wp_reset_postdata();
        ?>
		</div>
	</div>
	<div class="copyright">
		<p>Copyright 2019 © Dược Quảng Nguyên</p>
	</div>

	<div class="hotline_fixed">
		<h5>Hỗ trợ trực tuyến</h5>
		<p><?php if(get_option('hotline_fixed')){ ?><a href="tel:<?php echo get_option('hotline_fixed'); ?>"><?php echo get_option('hotline_fixed'); ?></a><?php }?></p>
	</div>
</footer>
<div class="popup popup_order" data-backdrop="static" data-keyboard="false" >
	<div class="content_popup">
		<h2>Đặt mua sản phẩm</h2>
		<div class="col-sm-6">
			<?php echo do_shortcode('[contact-form-7 id="478" title="Form liên hệ popup"]'); ?>
		</div>
		<div class="col-sm-6">
			<figure class="img_product_pop"><img src="<?php echo BASE_URL; ?>/images/anh_dha_canxi.png"></figure>
		</div>
		<div class="close_popup" data-dismiss="modal">
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>
	</div>

</div>
<div class="phonering-alo-phone phonering-alo-green phonering-alo-show" id="phonering-alo-phoneIcon">
<div class="phonering-alo-ph-circle"></div>
 <div class="phonering-alo-ph-circle-fill"></div>
<a href="tel:<?php echo get_option('hotline_fixed'); ?>" class="pps-btn-img" title="Liên hệ">
 <div class="phonering-alo-ph-img-circle"></div>
 </a>
</div>

<div class="fbring-alo-fb fbring-alo-green fbring-alo-show" id="fbring-alo-fbIcon">
<div class="fbring-alo-ph-circle"></div>
 <div class="fbring-alo-ph-circle-fill"></div>
<a href="<?php echo get_option('fb_fixed'); ?>" target="_blank" class="pps-btn-img" title="Liên hệ">
 <div class="fbring-alo-ph-img-circle"></div>
 </a>
</div>
<div class="zlring-alo-zl zlring-alo-green zlring-alo-show" id="zlring-alo-zlIcon">
<div class="zlring-alo-ph-circle"></div>
 <div class="zlring-alo-ph-circle-fill"></div>
<a href="<?php echo get_option('zalo_fixed'); ?>" target="_blank" class="pps-btn-img" title="Liên hệ">
 <div class="zlring-alo-ph-img-circle"></div>
 </a>
</div>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5de646a7d96992700fca7b60/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<?php wp_footer(); ?>
<script src="<?php echo BASE_URL; ?>/js/wow.min.js"></script>
<script src="<?php echo BASE_URL; ?>/js/bootstrap.min.js"></script>
<script src="<?php echo BASE_URL; ?>/js/custom.js"></script>

</body>
</html>
