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

<div class="contact-wrap">
	<div class="container">
		<div class="contact-left">
			<?php if( have_rows('left_blocks') ): ?>
				<?php 
					while( have_rows('left_blocks') ): the_row(); 
					$text = get_sub_field('text');
				?>
					<div class="contact-block">
						<?php echo $text; ?>
					</div>
				<?php endwhile; endif; ?>
			
		</div>
		<div class="contact-right">
			<p>Please complete the form below and our team will be in touch:</p>
			<?php gravity_form( 1, false, false, false, '', true ); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>