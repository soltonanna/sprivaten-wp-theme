<?php
if ( ! function_exists( 'sprivaten_setup' ) ) {

	function sprivaten_setup() {
		load_theme_textdomain( 'sprivaten', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'sprivaten' ),
				'footer'  => esc_html__( 'Secondary menu', 'sprivaten' ),
			)
		);

		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		$logo_width  = 300;
		$logo_height = 100;

		add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			)
		);

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );

		$editor_stylesheet_path = './assets/css/style-editor.css';

		add_editor_style( $editor_stylesheet_path );

		// Remove feed icon link from legacy RSS widget.
		add_filter( 'rss_widget_feed_link', '__return_empty_string' );
	}
}
add_action( 'after_setup_theme', 'sprivaten_setup' );

/**
 * Register widget area.
 */
function sprivaten_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'sprivaten' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'sprivaten' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'sprivaten_widgets_init' );

/** 
 * Enqueue scripts and styles. 
*/
function sprivaten_scripts() {
	global $wp_scripts;
	
    wp_enqueue_style( 
        'sprivaten-style', 
        get_template_directory_uri() . '/css/style.min.css', 
        array(), 
        wp_get_theme()->get( 'Version' ) 
    );
	

	// RTL styles.
	wp_style_add_data( 'sprivaten-style', 'rtl', 'replace' );

	// Threaded comment reply styles.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Responsive embeds script.
	wp_enqueue_script(
		'sprivaten-main-script',
		get_template_directory_uri() . '/js/dist/index.min.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'sprivaten_scripts' );


register_nav_menus( array(
    'primary' => esc_html__( 'Primary', 'sprivaten' ),
) );


/** CREATE Table for Appointment form after activate theme */
function create_appointment_tables() {
	global $wpdb;
	$charset_collate = $wpdb->get_charset_collate();

	$sql_book_appointment = "CREATE TABLE IF NOT EXISTS `" . $wpdb->prefix . "book_appointment_data` (
		`id` int(11) NOT NULL AUTO_INCREMENT,
		`book_name` varchar(100) NOT NULL,
		`book_email` varchar(50) NOT NULL,
		`book_department` varchar(100) NOT NULL,
		`book_time` varchar(100) NOT NULL,
		PRIMARY KEY (`id`)
	) " . $charset_collate . ";";

	$sql_make_appointment = "CREATE TABLE IF NOT EXISTS `" . $wpdb->prefix . "make_appointment_data` (
		`id` int(11) NOT NULL AUTO_INCREMENT,
		`make_name` varchar(100) NOT NULL,
		`make_email` varchar(50) NOT NULL,
		`make_department` varchar(100) NOT NULL,
		`make_time` varchar(100) NOT NULL,
		`make_message` varchar(250) NOT NULL,
		PRIMARY KEY (`id`)
	) " . $charset_collate . ";";

    $wpdb->query($sql_book_appointment);
    $wpdb->query($sql_make_appointment);

}
add_action("after_switch_theme", "create_appointment_tables");


// Ajax callback function for header 'Book Appointment' form
add_action( 'wp_ajax_book_appointment', 'book_appointment_ajax_function' );
add_action( 'wp_ajax_nopriv_book_appointment', 'book_appointment_ajax_function' );

function book_appointment_ajax_function() { 
	global $wpdb;

    // Get data from the AJAX request
    $book_name = $_POST['book_name'];
    $book_email = $_POST['book_email'];
    $book_department = $_POST['book_department'];
    $book_time = $_POST['book_time'];

    // Insert data into the table
    $table_name = $wpdb->prefix . 'book_appointment_data';
	
    $wpdb->insert(
        $table_name,
        array(
            'book_name' => $book_name,
            'book_email' => $book_email,
            'book_department' => $book_department,
            'book_time' => $book_time,
        ),
        array(
            '%s',
            '%s',
            '%s',
            '%s'
		)
    );

    wp_die();
}


// Ajax callback function for header 'Make Appointment' form
add_action( 'wp_ajax_make_appointment', 'make_appointment_ajax_function' );
add_action( 'wp_ajax_nopriv_make_appointment', 'make_appointment_ajax_function' );

function make_appointment_ajax_function() { 
	global $wpdb;

    // Get data from the AJAX request
    $make_name = $_POST['make_name'];
    $make_email = $_POST['make_email'];
    $make_department = $_POST['make_department'];
    $make_time = $_POST['make_time'];
    $make_message = $_POST['make_message'];

    // Insert data into the table
    $table_name = $wpdb->prefix . 'make_appointment_data';
	
    $wpdb->insert(
        $table_name,
        array(
            'make_name' => $make_name,
            'make_email' => $make_email,
            'make_department' => $make_department,
            'make_time' => $make_time,
			'make_message' => $make_message,
        ),
        array(
            '%s',
            '%s',
            '%s',
            '%s',
            '%s'
		)
    );

    wp_die();
}