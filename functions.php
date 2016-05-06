<?php 

require_once('wp_bootstrap_navwalker.php');

    // generateMenu_Main
    register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'Triclinium' )
    ) );

    // widget
    if (function_exists('register_sidebar'))
	  register_sidebar(array(
	  'name' => 'O nas',
	  'before_widget' => '<div>',
	  'after_widget' => '</div>'
	));


    // pagination
	function custom_pagination() {
        global $wp_query;
        $big = 999999999; // need an unlikely integer
        $pages = paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $wp_query->max_num_pages,
                'prev_next' => false,
                'type'  => 'array',
                'prev_next'   => TRUE,
	            'prev_text'    => __('«'),
	            'next_text'    => __('»'),
	             ) );
            if( is_array( $pages ) ) {
                $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
                echo '<ul class="pagination">';
                foreach ( $pages as $page ) {
                    echo "<li>$page</li>";
                }
                echo '</ul>';
            }
    }

    // slug_specialists
    function the_slug_specialists() {
        $post_data = get_post($post->ID, ARRAY_A);
        $slug = $post_data['post_name'];
        return $slug; 
    }

    // slug
    function the_slug() {
        $post_data = get_post($post->ID, ARRAY_A);
        $slug = $post_data['post_name'];
        return $slug; 
    }

    // thumbnails
    add_theme_support( 'post-thumbnails' ); 

?>            