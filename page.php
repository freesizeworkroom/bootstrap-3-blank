<?php get_header();?>

    <div class="container section offset_top_50">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <h2><?php the_title();?></h2>
          
          <?php the_content();?>

          <?php endwhile; else : ?>

          <?php endif; ?>

        </div>
      </div>
    </div>
<?php get_footer();?>
