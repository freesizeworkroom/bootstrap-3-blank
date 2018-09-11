<?php
 get_header();?>

    <div class="container section offset_top_50">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-8 col-sm-8">
          <h1><?php single_cat_title();?></h1>

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          
          <div class="post_item">
          
            <h2><?php the_title();?></h2>
            
            <?php the_excerpt();?>

            <a href="<?php the_permalink();?>">Read more >> </a>
          
          </div>

          <?php endwhile; else : ?>

          <?php endif; ?>

          <div class="pagination">
             <div class="pagination_links pull-right"><?php echo get_next_posts_link( '<strong>Newer entries</strong>' ); ?></div>
             <div class="pagination_links pull-left"><?php echo previous_posts_link( '<strong>Older entries</strong>' ); ?></div>
          </div>
        </div>

        <div class="col-md-4 col-sm-4">
          <div class="widget_block">
            <h4>Categories</h4>
            
            <ul>
            <?php wp_list_categories( array(
                'title_li'   => '',
                'orderby'    => 'name',
                'show_count' => true
            ) ); ?> 
            </ul>
          </div>

          <div class="widget_block">
            <h4>Tags</h4>
            
            <?php wp_tag_cloud(); ?>

          </div>

          <div class="widget_block">
            <h4>Archives</h4>

            <ul>
            <?php wp_get_archives( array( 'type' => 'monthly', 'limit' => 12 ) ); ?>
            </ul>
          </div>

          

        </div>
      </div>
    </div>

<?php get_footer();?>
