<header <?php hybrid_attr( 'header' ); ?>>

		<?php if ( get_header_image() ) { ?>
			<div class="header-image">
				<div class="header-image-wrap">
					<img class="site-logo" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>">
				</div>
			</div>
		<?php } // end header image ?>


		<div id="branding">

			<?php hybrid_site_title(); ?>
			<?php hybrid_site_description(); ?>

		</div><!-- #branding -->

</header><!-- #header-->