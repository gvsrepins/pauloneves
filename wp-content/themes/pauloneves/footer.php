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

		<p>
			<?php echo eto_get_option('eto_linha1') ?> 
			<br>_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ <br> 
			<?php echo eto_get_option('eto_linha2') ?>
		</p>
		</div> <!--description-->

	</div><!--footer-->

</div> <!--conteiner-->

<?php wp_footer(); ?>

</body>
</html>


