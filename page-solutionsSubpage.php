<?php
/*
/ Template Name: Solutions SubPage
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
		<div class="sidebar">
			<h2 class="sidebar-title">Core Capabilities</h2>
			<div class="sidebar-inner">
				<ul class="sidebar-list">
					<?php
						$parentID = $post->post_parent;
						if($parentID === 12){
							$childOf = get_the_ID();	
						}else {
							$childOf = $post->post_parent;
						}
					    	wp_list_pages(array(
					        'title_li'    => '',
					        'child_of'    => $childOf,
					        'link_after' => '&nbsp;&nbsp;<svg width="7" height="13" viewBox="0 0 7 13" xmlns="http://www.w3.org/2000/svg"><path d="M2.133 11l3.58-4.095a.5.5 0 000-.658L2 2h0" stroke="#821B21" stroke-width="2.4" fill="none" fill-rule="evenodd" stroke-linecap="round"/></svg>',
					    ));
				?>
				
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="projects projects-inner">
	<div class="project">
		<div class="project-left">
			<div class="project-info">
				<h3 class="project-name"><?php the_field('cs_name'); ?></h3>
				<p class="project-summary"><?php the_field('cs_text'); ?></p>
			</div>
		</div>
		<div class="project-right">
			<div class="project-image" style="background-image:url('<?php echo wp_get_attachment_image_url( get_field("cs_image"), "project" ); ?>');"><?php if(get_field('cs_pdf')) : ?><a href="<?php the_field('cs_pdf'); ?>" target="_blank" class="btn"><img src="<?php bloginfo('template_url'); ?>/build/svg/icon-download.svg" alt="">Download Success Story</a><?php endif; ?>
</div>
			
		</div>
	</div>
	
</div>


<?php get_footer(); ?>