<?php
/**
 * Template Name: Calendar Template
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

		<div class="agendaContent">
			<div class="mural">
				<p>Mural de eventos</p>
				<ul>
					<li><a href=""><img src="<?php bloginfo('template_directory'); ?>/img/mural1.png"></a></li>
					<li><a href=""><img src="<?php bloginfo('template_directory'); ?>/img/mural2.png"></a></li>
					<li><a href=""><img src="<?php bloginfo('template_directory'); ?>/img/mural3.png"></a></li>
				</ul>                
			</div> <!--mural-->


			<div class="agenda">                                  
				<?php while ( have_posts() ) : the_post(); ?>
				<?php if ( has_post_thumbnail() ) : ?>
				
				<div class="entry-page-image">
					<?php the_post_thumbnail(); ?>
				</div><!-- .entry-page-image -->

			<?php endif; ?>

			<?php get_template_part( 'content', 'page' ); ?>

		<?php endwhile; // end of the loop. ?>
	</div><!--Agenda-->

	<div class="blockRight">
		<p>Proximo mes</p>
		<img src="<?php bloginfo('template_directory'); ?>/img/calendarRigthr.png" alt="">   
	</div>

	<div class="months">
		<p>Eventos do Grupo</p>
		<img src="<?php bloginfo('template_directory'); ?>/img/events.png" alt="">
	</div>

	<div class="events">
		<p>Proximos Eventos</p>
		<img src="<?php bloginfo('template_directory'); ?>/img/nextMonths.png" alt="">
	</div>
</div>
</div><!--agendaContent-->
</div><!-- #content -->
</div><!-- #primary -->

<?php //get_sidebar( 'front' ); ?>
<?php get_footer(); ?>