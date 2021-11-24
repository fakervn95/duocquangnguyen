<?php 
/*
Template Name: page-template-datmua
*/
get_header(); 
?>	
<div class="page-wrapper">
	<div class="g_content">
		<div class="container"> 
			<div class="row">
				<div class="col-md-9 col-sm-9 content_left">
							<?php 
		$content_post = get_post($my_postid);
		$content = $content_post->post_content;
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]&gt;', $content);
		echo $content;
		?>
					<div class="content_single_post">
						<?php echo do_shortcode('[contact-form-7 id="590" title="Form đặt mua"]'); ?>
					</div>
					<div class="tg_shops">
						<div class="area_hanoi">
							<?php
							$args = array(  
								'post_status' => 'publish',
								'posts_per_page' => 50, 
								'orderby' => 'title', 
								'order' => 'ASC',
								'cat' => 9
							);
							$loop_hanoi = new WP_Query( $args );  
							?>
							<h3><?php echo get_cat_name(9); ?></h3>
							<ul>
							<?php while ( $loop_hanoi->have_posts() ) : $loop_hanoi->the_post(); 
								?>
									<li><a href="<?php echo the_permalink();?>"> <?php echo the_title(); ?></a></li>
								<?php
							endwhile;
							?>
							</ul>
						</div>
						<div class="area_hcm">
							<?php
							$args = array(  
								'post_status' => 'publish',
								'posts_per_page' => 50, 
								'orderby' => 'title', 
								'order' => 'ASC',
								'cat' => 10
							);
							$loop_hanoi = new WP_Query( $args );  
							?>
							<h3><?php echo get_cat_name(10); ?></h3>
							<ul>
							<?php while ( $loop_hanoi->have_posts() ) : $loop_hanoi->the_post(); 
								?>
									<li><a href="<?php echo the_permalink();?>"> <?php echo the_title(); ?></a></li>
								<?php
							endwhile;
							?>
							</ul>
						</div>
						
						<div class="area_mienbac">
							<?php
							$args = array(  
								'post_status' => 'publish',
								'posts_per_page' => 50, 
								'orderby' => 'title', 
								'order' => 'ASC',
								'cat' => 11
							);
							$loop_hanoi = new WP_Query( $args );  
							?>
							<h3><?php echo get_cat_name(11); ?></h3>
							<ul>
							<?php 
							      while ($loop_hanoi->have_posts() ) : $loop_hanoi->the_post(); 
								?>
									<li><a href="<?php echo the_permalink();?>"> <?php echo the_title(); ?></a></li>
								<?php
							endwhile;
							?>
							</ul>
						</div>
						<div class="area_miennam">
							<?php
							$args = array(  
								'post_status' => 'publish',
								'posts_per_page' => 50, 
								'orderby' => 'title', 
								'order' => 'ASC',
								'cat' => 12
							);
							$loop_hanoi = new WP_Query( $args );  
							?>
							<h3><?php echo get_cat_name(12); ?></h3>
							<ul>
							<?php 
							      while ($loop_hanoi->have_posts() ) : $loop_hanoi->the_post(); 
								?>
									<li><a href="<?php echo the_permalink();?>"> <?php echo the_title(); ?></a></li>
								<?php
							endwhile;
							?>
							</ul>
						</div>
							<div class="area_mientrung">
							<?php
							$args = array(  
								'post_status' => 'publish',
								'posts_per_page' => 50, 
								'orderby' => 'title', 
								'order' => 'ASC',
								'cat' => 14
							);
							$loop_hanoi = new WP_Query( $args );  
							?>
							<h3><?php echo get_cat_name(14); ?></h3>
							<ul>
							<?php 
							      while ($loop_hanoi->have_posts() ) : $loop_hanoi->the_post(); 
								?>
									<li><a href="<?php echo the_permalink();?>"> <?php echo the_title(); ?></a></li>
								<?php
							endwhile;
							?>
							</ul>
						</div>
					</div>
				</div><!-- content_left -->
				<div class="col-md-3 col-sm-3 sidebar">
					<?php dynamic_sidebar('sidebar1'); ?> 
				</div> 
			</div>
		</div><!-- container -->
	</div>
</div>
<?php get_footer(); ?>

