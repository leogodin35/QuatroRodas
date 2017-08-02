<?php get_header(); ?>

    <!-- Inicio da Homepage -->
    <main>
      <div class="wrapper">
        <section id="principal">
          <div class="row painel padding-zero">
            <div class="col-sm-6 col-xs-12 figura-principal padding-zero">
              <a href="http://leonardogodinho.16mb.com/bmw-confirma-novos-x1-e-serie-3-no-brasil/"><img class="img-responsive img-4rodas" src="<?php echo(get_template_directory_uri()); ?>/imagens/carros_grandes.jpg" alt="carros_grandes"></a>
            </div>
            <div class="col-sm-6 col-xs-12 figura-geral padding-zero">
              <div class="row figura-geral-linha padding-zero">
                <div class="col-sm-6 col-xs-12 padding-zero">
                  <a href="http://leonardogodinho.16mb.com/frankfurt-kia-revela-novo-sportage/"><img class="img-responsive img-4rodas" src="<?php echo(get_template_directory_uri()); ?>/imagens/fabricantes.jpg" alt="fabricantes"></a>
                </div>
                <div class="col-sm-6 col-xs-12 padding-zero">
                  <a href="http://leonardogodinho.16mb.com/"><img class="img-responsive img-4rodas" src="<?php echo(get_template_directory_uri()); ?>/imagens/publicidade.jpg" alt="publicidade"></a>
                </div>
              </div>
              <div class="row figura-geral-linha padding-zero">
                <div class="col-sm-6 col-xs-12 padding-zero">
                  <a href="http://leonardogodinho.16mb.com/frankfurt-porsche-misson-e-da-um-show/"><img class="img-responsive img-4rodas" src="<?php echo(get_template_directory_uri()); ?>/imagens/fabricantes2.jpg" alt="fabricantes2"></a>
                </div>
                <div class="col-sm-6 col-xs-12 padding-zero">
                  <a href="http://leonardogodinho.16mb.com/nova-geracao-do-volkswagen-tiguan/"><img class="img-responsive img-4rodas" src="<?php echo(get_template_directory_uri()); ?>/imagens/promovido.jpg" alt="promovido"></a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="figuras">
          <ul>
            <?php
            $myquery = new WP_Query('category_name=figuras&posts_per_page=4');
            while ( $myquery->have_posts() ) : $myquery->the_post();
                ?>
                <li>
                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(false, array('class'=>'img-responsive')); ?></a>
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                    <span><?php echo get_post_meta($post->ID, 'resumo', true); ?></span>
                    <a href="#"><span><?php echo get_post_meta($post->ID, 'link', true); ?></span></a>
                </li>
            <?php endwhile; ?>
          </ul>
        </section>
      </div>
    </main>

    <!-- Fim da Homepage -->

<?php get_footer(); ?>
