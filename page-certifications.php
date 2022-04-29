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
			<?php if(get_field('cert_title')) : ?><h2><?php the_field('cert_title'); ?></h2><?php endif; ?>
			<?php if(get_field('cert_text')) : ?><p><?php the_field('cert_text'); ?></p><?php endif; ?>
			
			<?php if( have_rows('certifications') ): ?>
				<div class="secondary-certs">
				<?php 
					while( have_rows('certifications') ): the_row(); 
					// vars
					$image = get_sub_field('image');
					$title = get_sub_field('text'); 
					$url = get_sub_field('url');
				?>
					<div class="cert">
						<div class="cert-inner">
							<div class="cert-image">
								<?php echo wp_get_attachment_image( $image, 'full' ); ?>
							</div>
							<?php if($title) : ?>
								<div class="cert-text">
									<span>
										<?php if($url) : ?>
											<a href="<?php echo $url; ?>" target="_blank">
										<?php endif; ?>
										<?php echo $title; ?>
										<?php if($url) : ?>
											</a>
										<?php endif; ?>
									</span>
								</div>
							<?php endif; ?>
						</div>
					</div>
				<?php endwhile; ?>
				</div>
			<?php endif; ?>
			
				
				
			
			
			
			<?php the_content(); ?>		
		</div>
	</div>
</div>


<?php get_footer(); ?>