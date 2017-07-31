<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package 4Rodas
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <!-- Inicio da Homepage -->
			<p>teste</p>
      <div class="wrapper">
        <section id="principal">
          <div id="figura-principal-1">
            <img src="<?php echo(get_template_directory_uri()); ?>/imagens/carros_grandes.jpg" alt="carros_grandes">
          </div>
          <div id="figura-principal-2">

            <div id="sub-figura-principal-1">
              <div id="sub-sub-figura-principal-1">
                <img src="<?php echo(get_template_directory_uri()); ?>/imagens/fabricantes.jpg" alt="fabricantes">
              </div>
              <div id="sub-sub-figura-principal-2">
                <img src="<?php echo(get_template_directory_uri()); ?>/imagens/publicidade.jpg" alt="publicidade">
              </div>
            </div>

            <div id="sub-figura-principal-2">
              <div id="sub-sub-figura-principal-3">
                <img src="<?php echo(get_template_directory_uri()); ?>/imagens/fabricantes2.jpg" alt="fabricantes2">
              </div>
              <div id="sub-sub-figura-principal-4">
                <img src="<?php echo(get_template_directory_uri()); ?>/imagens/promovido.jpg" alt="promovido">
              </div>
            </div>
          </div>
        </section>

        <section id="figuras">
          <ul>
            <?php
            /* Start the Loop */
            $myquery = new WP_Query('category_name=figuras&posts_per_page=4');
            while ( $myquery->have_posts() ) : $myquery->the_post();
                ?>
                <li>
                    <?php the_post_thumbnail(); ?>
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                    <span><?php echo get_post_meta($post->ID, 'resumo', true); ?></span>
                    <span><?php echo get_post_meta($post->ID, 'link', true); ?></span>
                </li>
            <?php endwhile; ?>
          </ul>
        </section>
      </div>
      <!-- Fim da Homepage -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
