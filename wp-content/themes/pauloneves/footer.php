<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Paulo Neves
 * @since Paulo Neves 1.0
 */
?>

<div class="clear"></div>
</div><!-- / content -->

<div class="footer">
	<div class="description">

		
			<?php echo eto_get_option('eto_linha1') ?> 
			 <br><img src="<?php bloginfo('template_directory'); ?>/img/border.png" alt=""><br>
			<div class="copyright"><?php echo eto_get_option('eto_linha2') ?></div>
		
		</div> <!--description-->

	</div><!--footer-->

</div> <!--conteiner-->

<?php wp_footer(); ?>


<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.fancybox-1.3.4/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>

</body>
</html>


