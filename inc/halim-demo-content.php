<?php


function halim_import_files() {
    return array(
        array(
            'import_file_name'             => 'Halim Demo Data Import',
            'categories'                   =>  'Category',
						
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo-data/halim-content.xml',
						
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demo-data/widgets.wie',
						
            'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'your-textdomain' ),
        ),
       
    );
}
add_filter( 'ocdi/import_files', 'halim_import_files' );

// automatically assign "Front page", "Posts page" and menu locations after the importer is done
function halim_after_import_setup() {
	// Assign menus to their locations.
	$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

	set_theme_mod( 'nav_menu_locations', array(
			'main-menu' => $main_menu->term_id, // replace 'main-menu' here with the menu location identifier from register_nav_menu() function
		)
	);

	// Assign front page and posts page (blog page).
	$front_page_id = get_page_by_title( 'Home' );
	$blog_page_id  = get_page_by_title( 'Blog' );

	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );
	update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'ocdi/after_import', 'halim_after_import_setup' );