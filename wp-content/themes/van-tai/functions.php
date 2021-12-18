<?php 
	 function css_js_theme_child() {

	wp_enqueue_style( 'hello-elementor-child-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'css_js_theme_child',30 );


function reg_testimonial() {
    $product = array(
		'name'                => _x( 'Nhà thiết kế', 'Post Type General Name', 'hello-elementor' ),
		'singular_name'       => _x( 'Nhà thiết kế', 'Post Type Singular Name', 'hello-elementor' ),
		'menu_name'           => __( 'Nhà thiết kế', 'hello-elementor' ),
		'parent_item_colon'   => __( 'Nhà thiết kế ', 'hello-elementor' ),
		'all_items'           => __( 'Tất cả nhà thiết kế', 'hello-elementor' ),
		'view_item'           => __( 'Display', 'hello-elementor' ),
		'add_new_item'        => __( 'Add new', 'hello-elementor' ),
		'add_new'             => __( 'Thêm Nhà thiết kế', 'hello-elementor' ),
		'edit_item'           => __( 'Edit', 'hello-elementor' ),
		'update_item'         => __( 'Update', 'hello-elementor' ),
		'search_items'        => __( 'Search', 'hello-elementor' ),
		'not_found'           => __( 'Not found', 'hello-elementor' ),
		'not_found_in_trash'  => __( 'Not found in trash', 'hello-elementor' ),
	);
	$prduc_cat = array(
		'labels'              => $product,
	    'supports'            => array( 'title','editor','thumbnail','comments','excerpt'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'menu_icon'           => 'dashicons-admin-users',
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'rewrite' => array( 'slug' => 'nha-thiet-ke' ),
	);
	register_post_type( 'nha-thiet-ke', $prduc_cat );



}
add_action( 'init', 'reg_testimonial', 0 );


function ssls_register_taxonomy() {
    $taxonomy_product = array(
		'name'                       => _x( 'Chuyên mục tác giả', 'Taxonomy General Name', 'hello-elementor' ),
		'singular_name'              => _x( 'Chuyên mục tác giả', 'Taxonomy Singular Name', 'hello-elementor' ),
		'menu_name'                  => __( 'Chuyên mục tác giả', 'hello-elementor' ),
		'all_items'                  => __( 'All Items', 'hello-elementor' ),
		'parent_item'                => __( 'Parent Item', 'hello-elementor' ),
		'parent_item_colon'          => __( 'Parent Item:', 'hello-elementor' ),
		'new_item_name'              => __( 'New Item Name', 'hello-elementor' ),
		'add_new_item'               => __( 'Add New Item', 'hello-elementor' ),
		'edit_item'                  => __( 'Edit Item', 'hello-elementor' ),
		'update_item'                => __( 'Update Item', 'hello-elementor' ),
		'view_item'                  => __( 'View Item', 'hello-elementor' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'hello-elementor' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'hello-elementor' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'hello-elementor' ),
		'popular_items'              => __( 'Popular Items', 'hello-elementor' ),
		'search_items'               => __( 'Search Items', 'hello-elementor' ),
		'not_found'                  => __( 'Not Found', 'hello-elementor' ),
		'no_terms'                   => __( 'No items', 'hello-elementor' ),
		'items_list'                 => __( 'Items list', 'hello-elementor' ),
		'items_list_navigation'      => __( 'Items list navigation', 'hello-elementor' ),
	);
	$sanpham = array(
		'slug'                       => 'designer',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$san_pham = array(
		'labels'                     => $taxonomy_product,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $sanpham,
	);
	register_taxonomy( 'designer', array( 'nha-thiet-ke' ), $san_pham );
}
add_action( 'init', 'ssls_register_taxonomy', 0 );


add_filter( 'rwmb_meta_boxes', 'hello_elementor_register_meta_boxes' );

function hello_elementor_register_meta_boxes( $meta_boxes ){
	$meta_boxes[]  = array(
		'title'  => __( 'More information', 'hello-elementor' ),
		'pages'  => array( 'nha-thiet-ke' ),
		'fields' => array(
			array(
				'name'       => 'Chọn chuyên mục',
				'id'         => 'chuyen-muc-san-pham',
				'type'       => 'taxonomy_advanced',
			
				// Taxonomy slug.
				'taxonomy'   => 'product_cat',
			
				// How to show taxonomy.
				'field_type' => 'select_advanced',
			),
			

		),
	);

	return $meta_boxes;
}

remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );