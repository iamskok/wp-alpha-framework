<?php
/**
* The template for displaying the footer
*/
?>

</div> <!-- .row -->
</div> <!-- .container -->

<!-- Footer -->
<footer class="site-footer">
	<div class="container">
		<?php get_sidebar( 'footer' ); ?>

		<div class="copyright">
			<p>
				&copy; <?php echo date( 'Y' ); ?>
				<a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
				<?php _e( 'All rights reserved', 'alpha' ); ?>
			</p>
		</div><!-- .copyright -->
	</div><!-- .container -->
</footer><!-- .site-footer -->

<?php wp_footer(); ?>

</body>
</html>
