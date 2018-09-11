
          
          <?php /* ?>
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
          <?php */ ?>


          <div class="widget_block">
            <?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
              <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                <?php dynamic_sidebar( 'home_right_1' ); ?>
              </div><!-- #primary-sidebar -->
            <?php endif; ?>
          </div>