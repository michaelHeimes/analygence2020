<div class="callouts">
	<a href="/contact" class="callout callout-one">
		<span class="callout-inner">
			<img src="<?php bloginfo('template_url'); ?>/build/images/callout-icon-1.png" alt="">
			<span class="callout-title">Let’s Get to Work</span>
			<span class="callout-cta cta">Contact Us<img src="<?php bloginfo('template_url'); ?>/build/svg/icon-arrow.svg" alt=""></span>
		</span>
	</a>
	<a href="/contract-vehicles" class="callout callout-two">
		<span class="callout-inner">
			<img src="<?php bloginfo('template_url'); ?>/build/images/callout-icon-2.png" alt="">
			<span class="callout-title">Partner With Us</span>
			<span class="callout-cta cta">Learn More<img src="<?php bloginfo('template_url'); ?>/build/svg/icon-arrow-red.svg" alt=""></span>
		</span>
	</a>
	<a href="/careers/career-opportunities" class="callout callout-three">
		<span class="callout-inner">
			<img src="<?php bloginfo('template_url'); ?>/build/images/callout-icon-3.png" alt="">
			<span class="callout-title">Join Our Dynamic, Supportive Team</span>
			<span class="callout-cta cta">Explore Job Openings<img src="<?php bloginfo('template_url'); ?>/build/svg/icon-arrow-red.svg" alt=""></span>
		</span>
	</a>
</div>

<footer class="footer">
	<div class="container">
		<a href="/" class="footer-logo"><img src="<?php bloginfo('template_url'); ?>/build/svg/logo-white.svg" alt="Analygence"></a>
		<nav class="footer-menu">
			<ul class="footer-menu-list">
				<?php
					$footermenu = wp_nav_menu( array(
					    'theme_location' => 'footer-menu',
					    'container' => false,
					    'items_wrap' => '%3$s',
					    'echo' => false,
					) );
					echo $footermenu;
				?>
				<li><a href="https://www.linkedin.com/company/analygence-inc-" target="_blank"><img src="<?php bloginfo('template_url'); ?>/build/svg/icon-linkedin-white.svg" alt="LinkedIn"></a>
			</ul>
		</nav>
	</div>
	<div class="copyright">
		<div class="container">
			<p class="copyright-text">&copy; <?php echo date("Y"); ?> ANALYGENCE. All rights reserved. <a href="/privacy-policy">Privacy Policy</a></p>
		</div>
	</div>
</footer>


<?php wp_footer(); ?>
<script src="<?php bloginfo('template_url'); ?>/build/js/theme.min.js"></script>
</body>
</html>



