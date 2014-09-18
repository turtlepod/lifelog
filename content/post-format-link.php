<article <?php hybrid_attr( 'post' ); ?>>

	<div class="entry-wrap">

		<div class="entry-published-wrap">
			<time <?php hybrid_attr( 'entry-published' ); ?>>
				<span class="day-large"><?php echo get_the_date( 'D' ); ?></span>
				<span class="time-box">
					<?php echo get_the_date( 'M' ); ?><br/>
					<?php echo get_the_date( 'jS' ); ?><br/>
					<?php echo get_the_date( 'Y' ); ?><br/>
				</span>
			</time>
		</div><!-- .entry-published-wrap -->

		<div class="comment-link-wrap">
			<?php comments_popup_link( number_format_i18n( 0 ), number_format_i18n( 1 ), '%', 'comments-link', '' ); ?>
		</div><!-- .comment-link-wrap -->

		<header class="entry-header">

			<?php the_title( '<h2 ' . hybrid_get_attr( 'entry-title' ) . '><a class="format-link-title" href="' . hybrid_get_the_post_format_url() . '" rel="bookmark" itemprop="url">', '</a></h2>' ); ?>

			<?php edit_post_link(); ?>

		</header><!-- .entry-header -->

		<?php if ( is_singular() ){ ?>
			<div <?php hybrid_attr( 'entry-content' ); ?>>
				<?php the_content(); ?>
				<?php wp_link_pages(); ?>
			</div><!-- .entry-content -->
		<?php } ?>

	</div><!-- .entry-wrap -->

</article><!-- .entry -->

<?php
	if ( is_singular() ){
		tamatebako_entry_nav();
		comments_template( '', true );
	}
?>
