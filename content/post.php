<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-wrap">

		<div class="entry-published-wrap">
			<time class="entry-published">
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
				<span class="entry-author vcard"><?php the_author_posts_link(); ?></span>
			</div><!-- .entry-byline -->

			<?php tamatebako_entry_title(); ?>

		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php edit_post_link(); ?>
			<?php tamatebako_entry_taxonomies(); ?>
		</footer><!-- .entry-footer -->

	</div><!-- .entry-wrap -->

</article><!-- .entry -->

<?php
	if ( is_singular() ){
		tamatebako_entry_nav();
		comments_template( '', true );
	}
?>
