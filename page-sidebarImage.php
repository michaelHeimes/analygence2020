<?php
/*
/ Template Name: Sidebar Image
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

<div class="hero <?php echo $heroSize; ?>" style="<?php echo $heroImg; ?>">
	<div class="container">
		<h1 class="hero-title"><?php if(get_field('hero_title')){the_field('hero_title');}else{the_title();} ?></h1>
	</div>
</div>

<div class="a-content">
	<div class="container">
		<div class="content-left s-text">
			<?php the_content(); ?>
		</div>
		<div class="sidebar-image">
			<?php echo wp_get_attachment_image( get_field('sidebar_image'), 'sidebar' ); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>