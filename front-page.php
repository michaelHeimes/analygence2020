<?php get_header(); ?>

<div class="splash">
	<iframe src="https://player.vimeo.com/video/403056671?background=1&transparent=1&loop=0" id="splash-video" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
	
	<div class="container">
		<div class="splash-text">
			<h1 class="splash-title"><?php the_field('hero_title'); ?></h1>
			<div class="splash-subtitle"><?php the_field('hero_subtitle'); ?></div>
		</div>
	</div>
</div>

<section class="subhero">
	<div class="container">
		<div class="subhero-left">
			<h2 class="subhero-title"><?php the_field('subhero_title'); ?></h2>
		</div>
		<div class="subhero-right">
			<p class="subhero-text"><?php the_field('subhero_text'); ?></p>
		</div>
	</div>
</section>
<section class="solutions-wrap">
	<div class="solutions-row is-dark">
		<div class="solutions-right">
			<h2 class="solutions-title"><span class="smaller">Sustainable</span> Solutions</h2>
		</div>
		<div class="solutions-left"></div>
	</div>
	<div class="solutions-row is-light">
		<div class="solutions-right">
			<p class="solutions-text"><?php the_field('solutions_text'); ?></p>
			<a href="/solutions" class="btn"><img src="<?php bloginfo('template_url'); ?>/build/svg/icon-eye.svg" alt="">See All Solutions</a>
		</div>
		<div class="solutions-left">
			<div class="solutions-overlap">
				<a class="solutions-overlap-wrap" href="/solutions/mission-support-services">
					<img src="<?php bloginfo('template_url'); ?>/build/images/mission-support-services.jpg" alt="">
					<span class="solutions-overlap-meta">Mission Support &amp; <span class="nowrap">Services<img src="<?php bloginfo('template_url'); ?>/build/svg/icon-arrow.svg" alt=""></span></span>
				</a>
				<a class="solutions-overlap-wrap" href="/solutions/cyber-solutions-intelligence">
					<img src="<?php bloginfo('template_url'); ?>/build/images/cyber-solutions-intelligence.jpg" alt="">
					<span class="solutions-overlap-meta">Cyber Solutions &amp; <span class="nowrap">Intelligence<img src="<?php bloginfo('template_url'); ?>/build/svg/icon-arrow.svg" alt=""></span></span>
				</a>
			</div>
		</div>
	</div>
	
</section>
<section class="certifications">
	<div class="container">
		<h2 class="certifications-title">Certifications</h2>
		
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
</section>

<?php if( have_rows('projects') ): ?>
	<section class="projects">
		<div class="project-slider">
		<?php 
			while( have_rows('projects') ): the_row(); 
			// vars
			$name = get_sub_field('name');
			$text = get_sub_field('text');
			$pdf = get_sub_field('pdf');
			$image = get_sub_field('image');
			
		?>
			<div class="project-wrap">
				<div class="project">
					<div class="project-left">
						<h2 class="project-title"><span class="smaller">Recent</span> Impact</h2>
						<div class="project-info">
							<h3 class="project-name"><?php echo $name; ?></h3>
							<p class="project-summary"><?php echo $text; ?></p>
							<?php if($pdf) : ?><a href="<?php echo $pdf; ?>" target="_blank" class="btn"><img src="<?php bloginfo('template_url'); ?>/build/svg/icon-download.svg" alt="">Download Success Story</a><?php endif; ?>
						</div>
					</div>
					<div class="project-right">
						<div class="project-image" style="background-image:url('<?php echo wp_get_attachment_image_url( $image, "project" ); ?>');"></div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
			</div>
		<div class="project-nav"></div>
	</section>
<?php endif; ?>

<section class="news-wrap">
	<div class="container">
		<div class="news-left">
			<h2 class="news-title">News &amp; Events</h2>
			<?php
				$args = array('post_type' => 'news', 'posts_per_page' => 3);
				$wp_query = new WP_Query($args);
					if($wp_query->have_posts()) : 
					while($wp_query->have_posts()) : 
					$wp_query->the_post();
			?>	
			
				<h3 class="news-article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>			
			<?php endwhile; else: ?>
			<?php endif; wp_reset_query(); ?>
			
			<a href="/news-events" class="cta">More News &amp; <span class="nowrap">Events<img src="<?php bloginfo('template_url'); ?>/build/svg/icon-arrow-red.svg" alt=""></span></a>
		</div>
		<div class="news-right">
			<h2 class="news-title">Life at ANALYGENCE</h2>
			<a href="/careers/life-at-analygence/" class="news-image-wrap">
				<img src="<?php bloginfo('template_url'); ?>/build/images/life-at-analygence.jpg" alt="">
				<span class="news-image-meta"><?php the_field('life_text'); ?></span>
			</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>