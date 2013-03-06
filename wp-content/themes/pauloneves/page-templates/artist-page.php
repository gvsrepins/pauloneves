<?php
/**
 * Template Name: Artist Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div id="primary" class="site-content">
	<div id="content" role="main">
		
	

		<?php while ( have_posts() ) : the_post(); ?>

		<div class="fundo2">
			<?php echo  wp_get_attachment_image( get_field('imagem_destaque'), 'full');  ?>	
		</div>

		<?php if ( has_post_thumbnail() ) : ?>				
		<div class="foto circular">
			<?php the_post_thumbnail(); ?>
		</div><!-- .entry-page-image -->
	<?php endif; ?>

	<div class="about">	
		<?php get_template_part( 'content', 'page' ); ?>
	</div> <!--about-->

<?php endwhile; // end of the loop. ?>


</div><!-- #content -->
</div><!-- #primary -->

<?php //get_sidebar( 'front' ); ?>
<?php get_footer(); ?>