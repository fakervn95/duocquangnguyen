<?php 
/*
Template Name: page-template-trangchu
*/
get_header(); 
?>	
<div class="page-wrapper">
	<div id="content">
		<div class="g_content">
			<div class="content_left">
				<div class="content_post_admin">
					<?php 
					$content_post = get_post($my_postid);
					$content = $content_post->post_content;
					$content = apply_filters('the_content', $content);
					$content = str_replace(']]>', ']]&gt;', $content);
					echo $content;
					?>
					<div class="list_post_news">
						<div class="container">
							<h2>Tin tức</h2> 
							<div class="row">
								<?php 
								$arg_cmt_post_q = array(
									'posts_per_page' => 3,
									'orderby' => 'post_date',
									'order' => 'DESC',
									'post_type' => 'post',
									'post_status' => 'publish',
									'cat' => array(19)
								);
								$cmt_post_q = new WP_Query();
								$cmt_post_q->query($arg_cmt_post_q);
								?>
								<?php if(have_posts()) : ?>
									<ul class="most-commented">
										<?php
										while ($cmt_post_q->have_posts()) : $cmt_post_q->the_post(); ?>
											<li class="col-sm-4">
												<div class="post_cmt_wrapper pw">
													<div class="wrap_thumb">
														<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );  ?>
														<figure class="thumbnail" style="background:url('<?php echo $image[0]; ?>');"> 
															<a href="<?php the_permalink();?>"></a>
														</figure>	
													</div>
													<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> </h3>
													<div class="post_meta">
														<span><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo the_time('d-m-Y'); ?></span>
													</div>
													<div class="excerpt">
														<p><?php echo excerpt(15); ?></p>
													</div>
													<div class="read_more">
														<a href="<?php the_permalink(); ?>"><?php if(get_locale() == 'en_US'){echo 'Read more >';} else { echo 'Xem thêm';}  ?></a>
													</div>
												</div>
											</li>
										<?php endwhile; ?>
									<?php endif; ?> 
								</ul>
							</div>
						</div>
					</div>
					<div class="feeling_cus">
						<div class="container">
							<div class="row">
								<div class="col-sm-6">
									<h3 class="title_widget">Cảm nhận của khách hàng</h3>
									<div class="wrap_feeling cus_slide">
										<ul>
											<?php
											$args = array(  
												'post_type' => 'peoplesays',
												'post_status' => 'publish',
												'orderby' => 'title', 
												'order' => 'ASC'
											);

											$loop_partner = new WP_Query( $args ); 
											while ( $loop_partner->have_posts() ) : $loop_partner->the_post(); 
												?> 
												<li>
													<figure><a href="<?php echo the_permalink(); ?>"><?php the_post_thumbnail();?></a></figure>
													<h3><a href="<?php echo the_permalink(); ?>"><?php echo the_title() ?></a></h3>
													<div class="textwidget">
														<p><?php echo get_the_excerpt();?></p>
														<span><?php echo get_post_meta( $post->ID, '_inputjob', true ); ?></span>
													</div>
												</li>
												<?php
											endwhile;
											wp_reset_postdata(); 
											?>
										</ul>
									</div>
								</div>
								<div class="col-sm-6">
									<h3 class="title_widget">Hỏi đáp</h3>
									<div class="wrap_feeling">
										<?php 
										$arg_hd = array(
											'posts_per_page' => 7,
											'orderby' => 'date',
											'post_type' => 'post',
											'post_status' => 'publish',
											'cat' => array(20)
										);
										$query_arg_hd = new WP_Query();
										$query_arg_hd->query($arg_hd);
										?>
										<?php if(have_posts()) : ?>
											<ul class="most-commented">
												<?php
												while ($query_arg_hd->have_posts()) : $query_arg_hd->the_post(); ?>
													<li>
														<a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>
													</li>
												<?php endwhile; ?>
											<?php endif; ?> 
										</ul>
										<div class="read_more">
											<a href="<?php echo get_category_link(20); ?>">Xem thêm</a>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div><!-- content_left -->
		</div>

	</div>
</div>
<?php get_footer(); ?>
