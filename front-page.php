<?php
/*
Template Name: Home Page
*/
 get_header();?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
      </div>
    </div>

    <div class="container">
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
