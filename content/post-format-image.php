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

			<div class="entry-byline">
				<?php hybrid_post_format_link(); ?>
				<span <?php hybrid_attr( 'entry-author' ); ?>><?php the_author_posts_link(); ?></span>
			</div><!-- .entry-byline -->

			<?php the_title( '<h2 ' . hybrid_get_attr( 'entry-title' ) . '><a href="' . get_permalink() . '" rel="bookmark" itemprop="url">', '</a></h2>' ); ?>

		</header><!-- .entry-header -->

		<div <?php hybrid_attr( 'entry-content' ); ?>>
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php edit_post_link(); ?>
			<?php tamatebako_entry_terms(); ?>
		</footer><!-- .entry-footer -->

	</div><!-- .entry-wrap -->

</article><!-- .entry -->

<?php
	if ( is_singular() ){
		tamatebako_entry_nav();
		comments_template( '', true );
	}
?>
