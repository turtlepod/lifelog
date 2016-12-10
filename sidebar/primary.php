<?php
/**
 * This file isn't actually loaded.
 * It's a requirement for theme check to have dynamic_sidebar() function defined.
 */
?>
<div id="sidebar-primary">

	<aside class="sidebar">

		<?php if ( is_active_sidebar( 'primary' ) ) : // If the sidebar has widgets. ?>

			<?php dynamic_sidebar( 'primary' ); // Displays the primary sidebar. ?>

		<?php endif; // End widgets check. ?>

	</aside><!-- #sidebar-primary > .sidebar -->

</div>