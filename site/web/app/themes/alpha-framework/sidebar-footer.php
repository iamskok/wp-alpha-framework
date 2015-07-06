<?php
/**
* The footer sidebar
*/
?>

<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
	<aside class="footer-sidebar col-md-4" role="complementary">
		<div class="row">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div><!-- .row -->
	</aside><!-- .sidebar -->
<?php endif; ?>
