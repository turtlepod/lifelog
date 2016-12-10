<header role="banner" id="header">

		<?php if ( get_header_image() ) { ?>
			<div class="header-image">
				<div class="header-image-wrap">
					<img class="site-logo" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>">
				</div>
			</div>
		<?php } // end header image ?>


		<div id="branding">

			<?php if( is_front_page() ){ ?>
				<h1 id="site-title"><a rel="home" href="<?php echo esc_url( user_trailingslashit( home_url() ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			<?php } else { ?>
				<p id="site-title"><a rel="home" href="<?php echo esc_url( user_trailingslashit( home_url() ) ); ?>"><?php bloginfo( 'name' ); ?></a></p>
			<?php } ?>
			<p id="site-description"><?php bloginfo( 'description' ); ?></p>

		</div><!-- #branding -->

</header><!-- #header-->