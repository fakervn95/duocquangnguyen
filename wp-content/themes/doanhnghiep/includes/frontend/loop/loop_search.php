<li class="list_post_item pw">
	<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );  ?>
	<figure class="thumbnail" style="background:url('<?php echo $image[0]; ?>');"><a href="<?php the_permalink(); ?>"><?php //the_post_thumbnail();?></a> </figure>
	<div class="post_wrapper_content">
		<h2 class="post_title"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="post_meta">
			<p><?php the_time('d/m/y');?></p>
		</div>
	
		
		<?php if(is_search() OR is_archive()){?>
			<p><?php echo excerpt(28); ?></p>
			<a class="readmore" href="<?php echo the_permalink(); ?>">Read more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
		<?php } 
		else {
			if($post->post_excerpt){ ?>
				<div class="excerpt"><p><?php echo excerpt(35); ?></p></div>
				<a class="readmore" href="<?php echo the_permalink(); ?>">Read more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
			<?php } else{
				the_content();
			} 
		} ?>
	
	</div>
</li>
