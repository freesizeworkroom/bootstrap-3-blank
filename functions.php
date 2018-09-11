<?php 

//enable menu
register_nav_menus( array(
	'primary' => __( 'Primary Navigation', 'Main Menu' ),
) );

register_nav_menus( array(
	'footer' => __( 'Footer Navigation', 'Footer Menu' ),
) );

//enable feature thumbnail
//add_theme_support('post-thumbnails');

// Numbered Pagination
if ( !function_exists( 'custom_pagination' ) ) {
	
	function custom_pagination() {
		
		$prev_icon = is_rtl() ? '&rarr;' : '&larr;';
		$next_icon = is_rtl() ? '&larr;' : '&rarr;';
		
		global $wp_query,$pagination_query;
		if ( $pagination_query ) {
		   $total = $pagination_query->max_num_pages;	    
		} else {
		   $total = $wp_query->max_num_pages;
		}

		$big = 999999999; // need an unlikely integer
		
		if( $total > 1 )  {
			 if( !$current_page = get_query_var('paged') )
				 $current_page = 1;
			 if( get_option('permalink_structure') ) {
				 $format = 'page/%#%/';
			 } else {
				 $format = '&paged=%#%';
			 }
			 
			echo paginate_links(array(
				'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'		=> $format,
				'current'		=> max( 1, get_query_var('paged') ),
				'total' 		=> $total,
				'mid_size'		=> 3,
				'type' 			=> 'list',
				'prev_text'		=> $prev_icon,
				'next_text'		=> $next_icon,
			 ) );
		}
	}
}

//widget

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );



//enqueue js scripts


/* ACF add Google Map API key */
function my_acf_init() {
	
	acf_update_setting('google_api_key', 'AIzaSyB7spcBWh8GCUYB7hUN0--vqzxj6It50Sw');
}

add_action('acf/init', 'my_acf_init');

function generateSlug($string)
{
   $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
   return strtolower($slug);
}

function empty_content($str) {
    return trim(str_replace('&nbsp;','',strip_tags($str))) == '';
}

function limit_str($content, $limit = 100)
  {
    // Take the existing content and return a subset of it
    return substr($content, 0, $limit) . '...';
  }

?>