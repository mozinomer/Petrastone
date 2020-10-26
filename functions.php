<?php 
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
));
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {
    if( function_exists('acf_add_options_page') ) {
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Theme General Settings'),
            'menu_title'    => __('Theme Settings'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}

function Gallery_postType() {
    register_post_type( 'gallery',
        array(
            'labels' => array(
                'name' => __( 'Gallery' ),
                'singular_name' => __( 'Gallery' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'gallery'),
            'show_in_rest' => true,
            'supports' => array('title', 'thumbnail')
        )
    );
}
add_action( 'init', 'Gallery_postType' );
 
add_action( 'init', 'create_subjects_hierarchical_taxonomy', 0 );
function create_subjects_hierarchical_taxonomy() {
  $labels = array(
    'name' => _x( 'Category', 'taxonomy general name' ),
    'singular_name' => _x( 'Category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Category' ),
    'all_items' => __( 'All Category' ),
    'parent_item' => __( 'Parent Category' ),
    'parent_item_colon' => __( 'Parent Category:' ),
    'edit_item' => __( 'Edit Category' ), 
    'update_item' => __( 'Update Category' ),
    'add_new_item' => __( 'Add New Category' ),
    'new_item_name' => __( 'New Category Name' ),
    'menu_name' => __( 'Category' ),
  );    
 
// Now register the taxonomy
  register_taxonomy('subjects',array('gallery'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'subject' ),
  ));
 
}


//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_product_category_hierarchical_taxonomy', 0 );
 
//create a custom taxonomy name it topics for your posts
 
function create_product_category_hierarchical_taxonomy() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'product_category', 'taxonomy general name' ),
    'singular_name' => _x( 'product_category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search product_category' ),
    'all_items' => __( 'All product_category' ),
    'parent_item' => __( 'Parent product_category' ),
    'parent_item_colon' => __( 'Parent product_category:' ),
    'edit_item' => __( 'Edit product_category' ), 
    'update_item' => __( 'Update product_category' ),
    'add_new_item' => __( 'Add New product_category' ),
    'new_item_name' => __( 'New product_category Name' ),
    'menu_name' => __( 'product_category' ),
  );    
 
// Now register the taxonomy
 
  register_taxonomy('product_category',array('post'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'product_category' ),
  ));
 
}



function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

add_filter('wpcf7_autop_or_not', '__return_false');



/*Custom Post type start*/
    function cw_post_type_product() {
    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    );
    $labels = array(
    'name' => _x('product', 'plural'),
    'singular_name' => _x('product', 'singular'),
    'menu_name' => _x('product', 'admin menu'),
    'name_admin_bar' => _x('product', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New product'),
    'new_item' => __('New product'),
    'edit_item' => __('Edit product'),
    'view_item' => __('View product'),
    'all_items' => __('All product'),
    'search_items' => __('Search product'),
    'not_found' => __('No product found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'product'),
    'has_archive' => true,
    'taxonomies' => array('product_category'),
    'hierarchical' => false,
    'menu_icon' => 'dashicons-admin-home',
    );

    register_post_type('product', $args);
    }

    add_action('init', 'cw_post_type_product');
    /*Custom Post type end*/




