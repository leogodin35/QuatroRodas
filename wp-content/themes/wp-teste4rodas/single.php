<?php get_header(); ?>

<div class="container">
  <div class="row">
    <?php
		while ( have_posts() ) : the_post();
    ?>
      <article class="">
        <div class="col-md-10 col-md-offset-2">
  				<h2><?php the_title(); ?></h2>
  			</div>
        <div class="col-md-10 col-md-offset-2">
          <?php the_post_thumbnail(false, array('class'=>'img-responsive')); ?>
        </div>
        <div class="col-md-10 col-md-offset-2">
  				<p><?php the_content(); ?></p>
  			</div>
        <div class="col-md-10 col-md-offset-2">
  				<a href="#"><span><?php echo get_post_meta($post->ID, 'link', true); ?></span></a>
  			</div>        
      </article>
    <?php
    endwhile;
    ?>
  </div>
</div>

<?php get_footer(); ?>
