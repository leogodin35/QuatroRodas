<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

  <title><?php wp_title(); ?></title>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <?php wp_head(); ?>

</head>

<body >

  <div id="banner">
    <img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/imagens/banner.jpg" alt="Banner QuatroRodas">
  </div>

  <header>
    <nav class="navbar navbar-default navbar-custom">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://leonardogodinho.16mb.com/"><h1 class="logo">QuatroRodas</h1></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navibar-top" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="">
              <a href="http://leonardogodinho.16mb.com/carros">CARROS <span class="caret"></span></a>
            </li>
            <li class="">
              <a href="http://leonardogodinho.16mb.com/testes">TESTES <span class="caret"></span></a>
            </li>
            <li class="">
              <a href="http://leonardogodinho.16mb.com/auto-servico">AUTO-SERVIÇO <span class="caret"></span></a>
            </li>
            <li class="">
              <a href="http://leonardogodinho.16mb.com/guia-de-compras">GUIA DE COMPRAS <span class="caret"></span></a>
            </li>
            <li class="">
              <a href="http://leonardogodinho.16mb.com/tabela-fipe">TABELA FIPE <span class="caret"></span></a>
            </li>
            <li class="">
              <a href="http://leonardogodinho.16mb.com/assine">ASSINE <span class="caret"></span></a>
            </li>
          </ul>
          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control pesquisar" placeholder="PESQUISAR">
            </div>
            <button type="submit" class="btn btn-default lupa"><span><img src="<?php echo(get_template_directory_uri()); ?>/imagens/lupa.png"></button>
          </form>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="row row-black">
      <div class="col-sm-12">
        <div class="acessados">
          <h4 class="label-acessados">+ ACESSADOS <span><img src="<?php echo(get_template_directory_uri()); ?>/imagens/seta_direita.png" alt="seta para direita"></span></h4>
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
      </div>
    </div>

  </header>
