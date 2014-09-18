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

		<div <?php hybrid_attr( 'entry-content' ); ?>>
			<?php if ( get_option( 'show_avatars' ) ) { ?>
				<a class="status-avatar" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo get_avatar( get_the_author_meta( 'email' ) ); ?></a>
			<?php } ?>
			<?php the_content(); ?>
			<?php edit_post_link(); ?>
		</div><!-- .entry-content -->

	</div><!-- .entry-wrap -->

</article><!-- .entry -->

<?php
	if ( is_singular() ){
		tamatebako_entry_nav();
		comments_template( '', true );
	}
?>
