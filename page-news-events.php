<?php get_header(); ?>
<?php
	if ('' != get_the_post_thumbnail()){ 
		$urlArray = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'hero');
		$heroImg = "background-image:url(". $urlArray[0] .")";  
		$heroSize = "";
	} else {
		$heroImg = "";
		$heroSize = "is-thin";
	}	
?>
<div class="hero <?php echo $heroSize; ?>" style="<?php echo $heroImg; ?>">
	<div class="container">
		<h1 class="hero-title"><?php if(get_field('hero_title')){the_field('hero_title');}else{the_title();} ?></h1>
	</div>
</div>
<div class="s-content">
	<div class="container">
		<div class="s-text">
			<?php the_content(); ?>
			<div class="news-grid">
				<?php
					$args = array('post_type' => 'news', 'posts_per_page' => 10, 'paged' => $paged);
					$wp_query = new WP_Query($args);
						if($wp_query->have_posts()) : 
						while($wp_query->have_posts()) : 
						$wp_query->the_post();
				?>	
				
					<div class="news-article">
						<h2 class="news-article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="news-article-meta"><?php echo get_the_date('F j, Y'); ?></div>
					</div>
				
				<?php endwhile; ?>
				<?php 
					if (function_exists("pagination")) {
						pagination($wp_query->max_num_pages);
					} 
				?>
				<?php else: ?>
				<?php endif; wp_reset_query(); ?>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>