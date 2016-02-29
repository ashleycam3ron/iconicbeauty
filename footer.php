		<a href="#" class="back-to-top hidden-xs"></a>
	</div><!-- end .wrapper -->
	<footer id="footer" class="container-fluid">
		<div class="gradient row"></div>
		<a href="<?php echo esc_url( home_url() ) ?>">
			<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/Iconic-Beauty-white-logo.png" alt="<?php bloginfo('name')?> logo">
		</a>
		<nav class="hidden-xs">
			<h4 class="hidden">Footer Menu</h4>
			<?php wp_nav_menu( array( 'menu' => 'primary', 'depth' => 1 )); ?>
		</nav>
		<nav>
			<h4 class="hidden">Social Media</h4>
			<?php wp_nav_menu( array( 'menu' => 'social') ); ?>
		</nav>
	    <p class="copyright">&copy; <?php echo date('Y');?> <?php bloginfo('name'); ?>. All Rights Reserved.</p>
	</footer>
  </body>
</html>
<?php wp_footer();?>