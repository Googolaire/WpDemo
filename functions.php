function my_assets() {
	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array( '/Some-Thing-new/css/responsive-screen.css' ) );
	wp_enqueue_style( 'responsive-screen', get_stylesheet_directory_uri() . '/style.css' );
	wp_enqueue_style( 'responsive-screen', get_stylesheet_directory_uri() . '/Some-Thing-new/css/responsive-screen.css' );
	wp_enqueue_style( 'screen', get_stylesheet_directory_uri() . '/Some-Thing-new/css/screen.css' );
	wp_enqueue_style( 'vendor', get_stylesheet_directory_uri() . '/Some-Thing-new/css/vendor.css' );

	wp_enqueue_script( 'owl-carousel', get_stylesheet_directory_uri() . '/owl.carousel.js', array( 'jquery' ) );
	wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/website-scripts.js', array( 'owl-carousel', 'jquery' ), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'my_assets' );
