function my_assets() {
	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array( 'responsive-screen.css' ) );
	wp_enqueue_style( 'reset', get_stylesheet_directory_uri() . '/css/responsive-screen.css' );
	wp_enqueue_style( 'reset', get_stylesheet_directory_uri() . '/css/screen.css' );
	wp_enqueue_style( 'reset', get_stylesheet_directory_uri() . '/css/vendor.css' );

	wp_enqueue_script( 'owl-carousel', get_stylesheet_directory_uri() . '/owl.carousel.js', array( 'jquery' ) );
	wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/website-scripts.js', array( 'owl-carousel', 'jquery' ), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'my_assets' );