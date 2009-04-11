<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>
	<div id="container">
		<div id="content">
			<div id="random"><?php random_posts(27); ?></div>
		</div>
	</div>

<?php get_footer(); ?>


