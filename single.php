<?php get_header() ?>

	<div id="container">
		<div id="content">

<?php the_post() ?>
			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<h2 class="entry-title"><?php the_title() ?></h2>
				<div class="entry-content">
<?php the_content() ?>
				</div>
				<div class="entry-meta">
					
					<!-- <?php edit_post_link( __( 'Edit', 'sandbox' ), "\t\t\t\t\t<span class=\"edit-link\">", "</span>" ) ?> -->
					
				</div>
			</div><!-- .post -->
		</div><!-- #content -->
	</div><!-- #container -->
<?php get_footer() ?>