<?php 
get_header(); 
$category = get_the_category();
$id_category = $category[0]->term_id;
?>	
<div id="wrap">
	<div class="g_content">
		
		<div class="container">
			<div id="breadcrumb" class="breadcrumb">

				<ul>
					<li><a href="<?php echo home_url(); ?>">Trang chủ</a></li>
					<li><a href="#"><?php 
					global $post; 
					if (( $post->post_type == 'peoplesays' )) {
						echo 'Cảm nhận khách hàng';
					}
					?></a></li>
					<li><?php echo the_title(); ?></li>
				</ul>
			</div> 
			<div class="row">
				<?php 
				if(have_posts()) :
					while(have_posts()) : the_post(); ?>
						<div class="col-sm-9  content_left">
							<article class="content_single_post">
								<?php
								?>
								<div class="single_post_info">
									<h2><?php the_title(); ?></h2>
									<p><?php the_time('d/m/Y');?> </p>
								</div>
								<div class="text_content">
									<?php  the_content(); ?>
								</div>
								
							</article>
							<div class="form_ct_single">
								<h5>Đăng ký nhận tư vấn miễn phí</h5>
								<?php echo do_shortcode('[contact-form-7 id="91" title="Form liên hệ"]'); ?>
							</div>
							<?php $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 6, 'post__not_in' => array($post->ID) ) ); ?>
							<?php if($related){ ?>
								<div class="related_posts">
									<h2>Tin cùng chuyên mục</h2>
									<ul class="row"> 
										<?php

										if( $related ) foreach( $related as $post ) {
											setup_postdata($post); ?>
											<li class="col-md-4 col-sm-4 col-xs-12">
												<div class="list_item_related pw">
													<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );  ?>
													<figure class="thumbnail" style="background:url('<?php echo $image[0]; ?>">
														<a href="<?php the_permalink(); ?>"><?php //the_post_thumbnail(); ?></a></figure>
														<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
													</div>

												</li>
											<?php }
											wp_reset_postdata(); ?>
										</ul>   
									</div>
								<?php } ?> 
							</div>
							<div class="col-sm-3 sidebar">
								<?php dynamic_sidebar('sidebar1'); ?> 
							</div> 
						<?php endwhile;
					else:
					endif;
					wp_reset_postdata();
					?>
				</div>

			</div>

		</div>
	</div>
	<?php get_footer(); ?>
