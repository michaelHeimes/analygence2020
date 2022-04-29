<?php
/*
/ Template Name: About Page
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

<section class="subhero">
	<div class="container">
		<div class="subhero-left">
			<h2 class="subhero-title"><?php the_field('subhero_title'); ?></h2>
		</div>
		<div class="subhero-right">
			<p class="subhero-text"><?php the_field('subhero_text'); ?></p>
			<?php if( have_rows('certifications') ): ?>
				<div class="certifications-grid">
				<?php 
					while( have_rows('certifications') ): the_row(); 
					$image = get_sub_field('image');
				?>
					<?php echo wp_get_attachment_image( $image, 'full' ); ?>
				<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<div class="a-content">
	<div class="container">
		<div class="content-left">
			<?php if( have_rows('content_blocks') ): ?>
				<?php 
					while( have_rows('content_blocks') ): the_row(); 
					// vars
					$icon = get_sub_field('icon');
					$title = get_sub_field('title');
					$text = get_sub_field('text');
				?>
					<div class="icon-block">
						<h2 class="icon-block-title"><?php echo wp_get_attachment_image( $icon, 'full' ); ?><?php echo $title; ?></h2>
						<?php echo $text; ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div class="sidebar">
			<h2 class="sidebar-title"><?php the_field('sidebar_title'); ?></h2>
			<div class="sidebar-inner">
				<ul class="sidebar-list">
					<?php if( have_rows('sidebar_list') ): ?>
						<?php 
							while( have_rows('sidebar_list') ): the_row(); 
							$text = get_sub_field('text');
						?>
							<li><?php echo $text; ?></li>
						<?php endwhile; ?>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>