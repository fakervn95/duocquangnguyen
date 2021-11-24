<?php 
get_header(); 
?>	
<div id="content">
	<div class="container">
		<div class="list_post">
			<h2 class="title_search">Kết quả tìm kiếm : <strong><?php the_search_query(); ?></strong></h2>
			<?php 
			if(have_posts()): ?>
				<ul class="list_post_search">
				<?php
				while(have_posts()): the_post(); 
				get_template_part('includes/frontend/loop/loop_search');
				 endwhile;
				 ?>
				 </ul>
				<?php get_template_part('includes/frontend/pagination/pagination');?>
				<?php
			else:
				echo '<p class="no_found_content"> Không tìm thấy nội dung bạn vừa nhập</p>';
			endif;
			wp_reset_postdata();
			?>
		</div>
		<!-- Add the pagination functions here. -->
	</div>
</div>
<?php get_footer(); ?>
