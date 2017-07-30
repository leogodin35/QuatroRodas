<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package resto
 */

?>

	</div><!-- #content -->

	<footer>
		<div class="wrapper">			
			<ul>
				<li><img src="<?php echo(get_template_directory_uri()); ?>/imagens/logo.png" alt="logo"></li>
				<li>Desenvolvido por Leonardo Godinho</li>
                <li>&copy; Todos os direitos reservados</li>
			</ul>
            <ul>
				<li><?php dynamic_sidebar( 'footer' ); ?></li>
			</ul>
			
		</div><!-- .wrapper -->
	</footer><!-- footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
