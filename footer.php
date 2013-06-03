	</div>
	<footer id="footer" class="wrapper">
		<p class="left-column">&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?></p>
		<?php wp_nav_menu( array( 'container_class' => 'right-column', 'theme_location' => 'footer' ) ); ?>
	</footer>
		<?php wp_footer(); ?>
</body>
</html>
