<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<?php include("configs_vkwp20.php"); ?>




<div class="uk-text-center">2002 – 2020, <strong>Viskoo Shop</strong><br>Todos os direitos reservados
<br>
	<span style="color: black;">Desenvolvido por <a href="https://viskoo.com.br/" target="_blank" style="color: black;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/logo-viskoo-vermelho.svg" width="20px"> <!-- logo-viskoo-branco.svg -->VISKOO</a>
	</span>
		
<!-- ÁREA EDITÁVEL -->
		
</div>
<div style="min-height:60px">
</div>


</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
