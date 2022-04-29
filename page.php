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
			
			<?php if( have_rows('leaders') ): ?>
				<div class="leader-grid">
				<?php 
					while( have_rows('leaders') ): the_row(); 
					// vars
					$image = get_sub_field('image');
					$name = get_sub_field('name');
					$title = get_sub_field('title');
					$text = get_sub_field('text');
				?>
					<div class="leader-block">
						<?php // echo wp_get_attachment_image( $image, 'leader', "", array( "class" => "leader-image" ) ); ?>
						<div class="leader-block-right">
							<div class="leader-flourish">
								<h2 class="leader-name"><?php echo $name; ?></h2>
								<div class="leader-title"><?php echo $title; ?></div>
							</div>
							<p class="leader-text"><?php echo $text; ?></p>
						</div>
					</div>
				<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>


<?php get_footer(); ?>