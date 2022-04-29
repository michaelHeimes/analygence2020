<?php
/*
/ Template Name: Solutions Landing Page
*/
?>
<?php get_header(); ?>
<?php
	if ('' != get_the_post_thumbnail()){ 
		$urlArray = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'hero');
		$heroImg = "background-image:url(". $urlArray[0] .")";  
	} else {
		$heroImg = "";
	}	
?>
<div class="hero" style="<?php echo $heroImg; ?>">
	<div class="container">
		<h1 class="hero-title"><?php if(get_field('hero_title')){the_field('hero_title');}else{the_title();} ?></h1>
	</div>
</div>

<div class="s-content">
	<div class="container">
		<div class="s-text">
			<h2 class="s-title"><?php the_field('s_title'); ?></h2>
			<?php the_field('s_text'); ?>
		</div>
	</div>
</div>

<div class="s-grid">
	<div class="s-grid-top">
		<h2 class="solutions-title">Our Solutions</h2>
	</div>
	<div class="s-grid-bottom-wrap">
		<div class="s-grid-bottom">
			<div class="s-grid-item">
				<a href="/solutions/mission-support-services" class="s-grid-image"><img src="<?php bloginfo('template_url'); ?>/build/images/mission-support-services-inner.jpg" alt=""></a>
				<a href="/solutions/mission-support-services" class="s-grid-title">Mission Support &amp; <span class="nowrap">Services<img src="<?php bloginfo('template_url'); ?>/build/svg/icon-arrow-dark.svg" alt=""></span></a>
				<p class="s-grid-text"><?php the_field('subpage_text_1'); ?></p>
			</div>
			<div class="s-grid-item">
				<a href="/solutions/cyber-solutions-intelligence" class="s-grid-image"><img src="<?php bloginfo('template_url'); ?>/build/images/cyber-solutions-intelligence-inner.jpg" alt=""></a>
				<a href="/solutions/cyber-solutions-intelligence" class="s-grid-title">Cyber Solutions &amp; <span class="nowrap">Intelligence<img src="<?php bloginfo('template_url'); ?>/build/svg/icon-arrow-dark.svg" alt=""></span></a>
				<p class="s-grid-text"><?php the_field('subpage_text_2'); ?></p>
			</div>
			
		</div>
	</div>
</div>


<?php get_footer(); ?>