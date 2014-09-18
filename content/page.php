<article <?php hybrid_attr( 'post' ); ?>>

	<div class="entry-wrap">

		<?php if ( ! is_singular() ){ ?>

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

		<?php } ?>

		<div class="comment-link-wrap">
			<?php comments_popup_link( number_format_i18n( 0 ), number_format_i18n( 1 ), '%', 'comments-link', '' ); ?>
		</div><!-- .comment-link-wrap -->

		<header class="entry-header">
			<?php the_title( '<h1 ' . hybrid_get_attr( 'entry-title' ) . '><a href="' . get_permalink() . '" rel="bookmark" itemprop="url">', '</a></h1>' ); ?>
		</header><!-- .entry-header -->

		<?php if ( is_singular() ){ ?>

			<div <?php hybrid_attr( 'entry-content' ); ?>>
				<?php the_content(); ?>
				<?php wp_link_pages(); ?>
			</div><!-- .entry-content -->

		<?php } else { ?>

			<div <?php hybrid_attr( 'entry-summary' ); ?>>
				<?php the_excerpt(); ?>
				<?php tamatebako_read_more(); ?>
			</div><!-- .entry-summary -->

		<?php } ?>

		<footer class="entry-footer">
			<?php edit_post_link(); ?>
			<?php tamatebako_entry_terms(); ?>
		</footer><!-- .entry-footer -->

	</div><!-- .entry-wrap -->

</article><!-- .entry -->

<?php
	if ( is_singular() ){
		comments_template( '', true );
	}
?>