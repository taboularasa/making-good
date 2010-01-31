<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>
	<div id="container">
		<div id="content">	
		<div id="projects-thumbnail-gallery">
			<h2>PROJECTS</h2>		
		  <?php query_posts('category_name=PROJECTS'); ?>

		  <?php 
			$counter = 1;
			while (have_posts()) : the_post(); ?>
		    <!-- Do special_cat stuff... -->
			<!-- <?php the_title(); ?><br/> -->
			<?php
			if ( has_post_thumbnail() ) {
				if($counter%3==0) { ?>
				<div class="post-thumbnail last-item">
				<?php } else { ?>
				<div class="post-thumbnail">
				<?php } ?>
			<a  href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>">
			<?php the_post_thumbnail(); ?>
			</a>
			<div class="post-thumbnail-excerpt"><?php the_excerpt(); ?></div><!-- post-thumbnail-excerpt -->
			</div><!-- post-thumbnail -->
			
			<?php 
			$counter++;
			} else { ?>
				<!-- theres no post thumbnail -->
			<?php
				}
			?>
		  <?php endwhile;?>
			<div class="spacer"> 
				&nbsp;
			</div><!-- spacer -->
			</div><!-- projects-thumbnail-gallery -->
		<div id="sketchbook-thumbnail-gallery">
			<h2>SKETCHBOOK</h2>
		<?php query_posts('category_name=SKETCHBOOK'); ?>
		<?php 
			$counter = 1;
			while (have_posts()) : the_post(); ?>
		    <!-- Do special_cat stuff... -->
			<!-- <?php the_title(); ?><br/> -->
			<?php
			if ( has_post_thumbnail() ) {
				if($counter%7==0) { ?>
				<div class="sketchbook-thumbnail last-item">
				<?php } else { ?>
				<div class="sketchbook-thumbnail">
				<?php } ?>
			<a  href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>">
			<?php the_post_thumbnail(array(75,75)); ?>
			</a>
			</div><!-- post-thumbnail -->
			
			<?php 
			$counter++;
			} else { ?>
				<!-- theres no post thumbnail -->
			<?php
				}
			?>
		  <?php endwhile;?>
			<div class="spacer"> 
				&nbsp;
			</div><!-- spacer -->
			</div><!-- sketchbook-thumbnail-gallery -->
		</div><!-- content -->
	</div><!-- container -->


<?php get_footer(); ?>
