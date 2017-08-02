<?php get_header(); ?>

<div class="container">
  <div class="row">
    <?php
		while ( have_posts() ) : the_post();
    ?>
      <div class="col-md-12">
				<h2><?php the_title(); ?></h2>
			</div>
      <?php
			the_post();
      the_post_thumbnail(false, array('class'=>'img-responsive'));

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	</div>
</div>

<?php get_footer(); ?>
