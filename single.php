<?php get_header(); ?>
<?php
	if ('' != get_the_post_thumbnail(21)){ 
		$urlArray = wp_get_attachment_image_src(get_post_thumbnail_id(21), 'hero');
		$heroImg = "background-image:url(". $urlArray[0] .")";  
		$heroSize = "";
	} else {
		$heroImg = "";
		$heroSize = "is-thin";
	}	
?>
<div class="hero is-thin" style="<?php echo $heroImg; ?>">
	<div class="container">
		<h1 class="hero-title">News &amp; Events</h1>
	</div>
</div>

<div class="s-content">
	<div class="container">
		<div class="s-text">
			<h2 class="news-single-title"><?php the_title(); ?></h2>
			<div class="news-article-meta"><?php echo get_the_date('F j, Y'); ?></div>
			<?php the_content(); ?>
			<a href="/news-events" style="display: inline-block;margin-top:32px;">&lsaquo; Return to News &amp; Events</a>
		</div>
	</div>
</div>


<?php get_footer(); ?>