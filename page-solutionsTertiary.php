<?php
/*
/ Template Name: Solutions Tertiary
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
		<h1 class="hero-title">
			<span class="breadcrumbs">Solutions / <?php $crumbID = $post->post_parent; if($crumbID != 12){echo get_the_title($crumbID); echo ' / ';} ?></span>
			<?php if(get_field('hero_title')){the_field('hero_title');}else{the_title();} ?></h1>
	</div>
</div>

<div class="a-content">
	<div class="container">
		<div class="content-left s-text">
			<h2 class="s-title"><?php the_field('s_title'); ?></h2>
			<?php the_field('s_text'); ?>
		</div>
			<?php if( have_rows('sidebar_list') ): ?>
				<div class="sidebar">
				<h2 class="sidebar-title"><?php the_field('sidebar_title'); ?></h2>
				<div class="sidebar-inner">
					<ul class="sidebar-list">
					<?php 
						while( have_rows('sidebar_list') ): the_row(); 
						$text = get_sub_field('text');
					?>
						<li><?php echo $text; ?></li>
					<?php endwhile; ?>
					</ul>
				</div>
				</div>
			<?php endif; ?>
			
	</div>
</div>



<?php get_footer(); ?>