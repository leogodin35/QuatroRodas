<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package 4Rodas
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>

<title>Quatro Rodas</title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="banner">
  <img src="<?php echo(get_template_directory_uri()); ?>/imagens/banner.jpg" alt="Banner QuatroRodas">
</div>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'resto' ); ?></a>
    
    
    
	<header id="4rodas">
		<div class="wrapper">
			<div class="logotipo">
				<h1 class="logo">QuatroRodas</h1>
			</div>
			<nav role="navigation">

				<div class="nav-itens">
					<h2>Navegação Principal</h2>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
					?>
				</div>
			</nav><!-- #site-navigation -->
            <div class="acessados">
          <h4>+ ACESSADOS <span><img src="<?php echo(get_template_directory_uri()); ?>/imagens/seta_direita.png" alt="seta para direita"></span></h4>
          <ul>
            <li><a href="#">SALÃO DO AUTOMÓVEL</a></li>
            <li><a href="#">RENEGADE</a></li>
            <li><a href="#">NOVO SANDERO</a></li>
            <li><a href="#">NOVO FOX</a></li>
            <li><a href="#">NOVO KA</a></li>
            <li><a href="#">HB20</a></li>
            <li><a href="#">DUSTER</a></li>
            <li><a href="#">GOLF</a></li>
            <li><a href="#">COROLLA</a></li>
            <li><a href="#">CIVIC</a></li>
            <li><a href="#">IA-ZI</a></li>
          </ul>
      </div>
		</div><!-- .wrapper -->
	</header><!-- header -->

	<div id="content" class="site-content">
