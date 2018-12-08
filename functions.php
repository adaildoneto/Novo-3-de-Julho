f<?php
/**
 * Odin functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @package Odin
 * @since 2.2.0
 */

/**
 * Sets content width.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 600;
}

add_image_size( "slider", 600, 400, array ( 'center', 'top' ) );
add_image_size( "cardnews", 280, 120, array ( 'center', 'top' ) );
add_image_size( "quadrado", 80, 80, array ( 'center', 'top' ) );
add_image_size( "big-quadrado", 200, 180, array ( 'center', 'top' ) );
/**
 * Odin Classes.
 */
//require_once get_template_directory() . '/core/classes/class-bootstrap-nav.php';
require_once get_template_directory() . '/core/classes/class-shortcodes.php';
//require_once get_template_directory() . '/core/classes/class-shortcodes-menu.php';
require_once get_template_directory() . '/core/classes/class-thumbnail-resizer.php';
// require_once get_template_directory() . '/core/classes/class-theme-options.php';
// require_once get_template_directory() . '/core/classes/class-options-helper.php';
// require_once get_template_directory() . '/core/classes/class-post-type.php';
// require_once get_template_directory() . '/core/classes/class-taxonomy.php';
// require_once get_template_directory() . '/core/classes/class-metabox.php';
// require_once get_template_directory() . '/core/classes/abstracts/abstract-front-end-form.php';
// require_once get_template_directory() . '/core/classes/class-contact-form.php';
// require_once get_template_directory() . '/core/classes/class-post-form.php';
// require_once get_template_directory() . '/core/classes/class-user-meta.php';
// require_once get_template_directory() . '/core/classes/class-post-status.php';
//require_once get_template_directory() . '/core/classes/class-term-meta.php';



// Require Materialize Custom Nav Walker Class
require get_template_directory() . '/core/classes/class-materialize-navwalker.php';




/**
 * Odin Widgets.
 */
require_once get_template_directory() . '/core/classes/widgets/class-widget-like-box.php';

if ( ! function_exists( 'odin_setup_features' ) ) {

	/**
	 * Setup theme features.
	 *
	 * @since 2.2.0
	 */
	function odin_setup_features() {

		/**
		 * Add support for multiple languages.
		 */
		load_theme_textdomain( 'odin', get_template_directory() . '/languages' );

		/**
		 * Register nav menus.
		 */
		register_nav_menus(
			array(
				'main-menu' => __( 'Main Menu', 'odin' )
			)
		);

		/*
		 * Add post_thumbnails suport.
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Add feed link.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Support Custom Header.
		 */
		$default = array(
			'width'         => 0,
			'height'        => 0,
			'flex-height'   => false,
			'flex-width'    => false,
			'header-text'   => false,
			'default-image' => '',
			'uploads'       => true,
		);

		add_theme_support( 'custom-header', $default );

		/**
		 * Support Custom Background.
		 */
		$defaults = array(
			'default-color' => '',
			'default-image' => '',
		);

		add_theme_support( 'custom-background', $defaults );

		/**
		 * Support Custom Editor Style.
		 */
		add_editor_style( 'assets/css/editor-style.css' );

		/**
		 * Add support for infinite scroll.
		 */
		add_theme_support(
			'infinite-scroll',
			array(
				'type'           => 'scroll',
				'footer_widgets' => false,
				'container'      => 'content',
				'wrapper'        => false,
				'render'         => false,
				'posts_per_page' => get_option( 'posts_per_page' )
			)
		);

		/**
		 * Add support for Post Formats.
		 */
		// add_theme_support( 'post-formats', array(
		//     'aside',
		//     'gallery',
		//     'link',
		//     'image',
		//     'quote',
		//     'status',
		//     'video',
		//     'audio',
		//     'chat'
		// ) );

		/**
		 * Support The Excerpt on pages.
		 */
		// add_post_type_support( 'page', 'excerpt' );

		/**
		 * Switch default core markup for search form, comment form, and comments to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption'
			)
		);

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for custom logo.
		 *
		 *  @since Odin 2.2.10
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 320,
			'width'       => 320,
			'flex-height' => true,
		) );
	}
}

add_action( 'after_setup_theme', 'odin_setup_features' );

/**
 * Register widget areas.
 *
 * @since 2.2.0
 */
function odin_widgets_init() {
	register_sidebar(
		array(
			'name' => __( 'Main Sidebar', 'odin' ),
			'id' => 'main-sidebar',
			'description' => __( 'Site Main Sidebar', 'odin' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h5 style="padding-bottom: 5px;">',
			'after_title' => '</h5><hr class="style-one"><div style="padding: 10px;">',
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Topo', 'odin' ),
			'id' => 'topo-sidebar',
			'description' => __( 'Widget abaixo da logo do 3 de julho', 'odin' ),
			'before_widget' => '<div class="row" style="padding: 0px; margin: 0px;"><div class="col s12 m12 l12">',
			'after_widget' => '</div></div>',
			'before_title' => '<h8 class="blue-grey-text" style="padding-bottom: 5px;">',
			'after_title' => '</h8><hr class="style-one">',
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Destaque', 'odin' ),
			'id' => 'destaque-sidebar',
			'description' => __( 'Widget abaixo do  Menu 3 de julho', 'odin' ),
			'before_widget' => '<div class="row" style="padding: 0px; margin: 0px;"><div class="col s12 m12 l12">',
			'after_widget' => '</div></div>',
			'before_title' => '<h8 class="blue-grey-text" style="padding-bottom: 5px;">',
			'after_title' => '</h8><hr class="style-one">',
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Video', 'odin' ),
			'id' => 'video-sidebar',
			'description' => __( 'Video em Destaque', 'odin' ),
			'before_widget' => '<div class="">',
			'after_widget' => '</div>',
			'before_title' => '<h8 class="white-text" style="padding-bottom: 5px;">',
			'after_title' => '</h8><hr class="style-one">',
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Lista Videos do Canal', 'odin' ),
			'id' => 'listavideo-sidebar',
			'description' => __( 'Videos ao lado do video em destaque', 'odin' ),
			'before_widget' => '<div style="z-index: 222;">',
			'after_widget' => '</div>',
			'before_title' => '<h8 class="white-text" style="padding-bottom: 5px;">',
			'after_title' => '</h8><hr class="style-one">',
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Home 1', 'odin' ),
			'id' => 'h1-sidebar',
			'description' => __( 'Banner entre o slides e o flash', 'odin' ),
			'before_widget' => '<div class="col s12 m12 l12">',
			'after_widget' => '</div>',
			'before_title' => '<h8 class="blue-grey-text" style="padding-bottom: 5px;">',
			'after_title' => '</h8><hr class="style-one">',
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Home 2', 'odin' ),
			'id' => 'h2-sidebar',
			'description' => __( 'Banner entre as noticias', 'odin' ),
			'before_widget' => '<div class="col s12 m12 l12">',
			'after_widget' => '</div>',
			'before_title' => '<h8 class="blue-grey-text" style="padding-bottom: 5px;">',
			'after_title' => '</h8><hr class="style-one">',
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Home 3', 'odin' ),
			'id' => 'h3-sidebar',
			'description' => __( 'Banner entre as noticias', 'odin' ),
			'before_widget' => '<div class="col s12 m12 l12">',
			'after_widget' => '</div>',
			'before_title' => '<h8 class="blue-grey-text" style="padding-bottom: 5px;">',
			'after_title' => '</h8><hr class="style-one">',
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Home 4', 'odin' ),
			'id' => 'h4-sidebar',
			'description' => __( 'Banner entre as noticias', 'odin' ),
			'before_widget' => '<div class="col s12 m12 l12">',
			'after_widget' => '</div>',
			'before_title' => '<h8 class="blue-grey-text" style="padding-bottom: 5px;">',
			'after_title' => '</h8><hr class="style-one">',
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Home 5', 'odin' ),
			'id' => 'h5-sidebar',
			'description' => __( 'Banner entre as noticias', 'odin' ),
			'before_widget' => '<div class="col s12 m12 l12">',
			'after_widget' => '</div>',
			'before_title' => '<h8 class="blue-grey-text" style="padding-bottom: 5px;">',
			'after_title' => '</h8><hr class="style-one">',
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Home 6', 'odin' ),
			'id' => 'h6-sidebar',
			'description' => __( 'Banner entre as noticias', 'odin' ),
			'before_widget' => '<div class="col s12 m12 l12">',
			'after_widget' => '</div>',
			'before_title' => '<h8 class="blue-grey-text" style="padding-bottom: 5px;">',
			'after_title' => '</h8><hr class="style-one">',
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Home 7', 'odin' ),
			'id' => 'h7-sidebar',
			'description' => __( 'Banner entre as noticias', 'odin' ),
			'before_widget' => '<div class="col s12 m12 l12">',
			'after_widget' => '</div>',
			'before_title' => '<h8 class="blue-grey-text" style="padding-bottom: 5px;">',
			'after_title' => '</h8><hr class="style-one">',
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Noticiais 1', 'odin' ),
			'id' => 'n1-sidebar',
			'description' => __( 'Insira aqui o widget de noticias do 3 de Julho', 'odin' ),
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h8 class="blue-grey-text" style="padding-bottom: 5px;">',
			'after_title' => '</h8><hr class="style-one">',
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Noticiais 2', 'odin' ),
			'id' => 'n2-sidebar',
			'description' => __( 'Insira aqui o widget de noticias do 3 de Julho', 'odin' ),
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h8 class="blue-grey-text" style="padding-bottom: 5px;">',
			'after_title' => '</h8><hr class="style-one">',
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Noticiais 3', 'odin' ),
			'id' => 'n3-sidebar',
			'description' => __( 'Insira aqui o widget de noticias do 3 de Julho', 'odin' ),
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h8 class="blue-grey-text" style="padding-bottom: 5px;">',
			'after_title' => '</h8><hr class="style-one">',
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Noticiais 4', 'odin' ),
			'id' => 'n4-sidebar',
			'description' => __( 'Insira aqui o widget de noticias do 3 de Julho', 'odin' ),
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h8 class="blue-grey-text" style="padding-bottom: 5px;">',
			'after_title' => '</h8><hr class="style-one">',
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Noticiais 5', 'odin' ),
			'id' => 'n5-sidebar',
			'description' => __( 'Insira aqui o widget de noticias do 3 de Julho', 'odin' ),
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h8 class="blue-grey-text" style="padding-bottom: 5px;">',
			'after_title' => '</h8><hr class="style-one">',
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Noticiais 6', 'odin' ),
			'id' => 'n6-sidebar',
			'description' => __( 'Insira aqui o widget de noticias do 3 de Julho', 'odin' ),
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h8 class="blue-grey-text" style="padding-bottom: 5px;">',
			'after_title' => '</h8><hr class="style-one">',
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Noticiais 7', 'odin' ),
			'id' => 'n7-sidebar',
			'description' => __( 'Insira aqui o widget de noticias do 3 de Julho', 'odin' ),
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h8 class="blue-grey-text" style="padding-bottom: 5px;">',
			'after_title' => '</h8><hr class="style-one">',
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Noticiais 8', 'odin' ),
			'id' => 'n8-sidebar',
			'description' => __( 'Insira aqui o widget de noticias do 3 de Julho', 'odin' ),
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h8 class="blue-grey-text" style="padding-bottom: 5px;">',
			'after_title' => '</h8><hr class="style-one">',
		)
	);
}

add_action( 'widgets_init', 'odin_widgets_init' );

/**
 * Flush Rewrite Rules for new CPTs and Taxonomies.
 *
 * @since 2.2.0
 */
function odin_flush_rewrite() {
	flush_rewrite_rules();
}

add_action( 'after_switch_theme', 'odin_flush_rewrite' );

/**
 * Load site scripts.
 *
 * @since 2.2.0
 */
function odin_enqueue_scripts() {
	$template_url = get_template_directory_uri();

	// Loads Odin main stylesheet.
	// wp_enqueue_style( 'odin-style', get_stylesheet_uri(), array(), null, 'all' );

	//Carregando o MaterializeCSS
	wp_enqueue_style ('Materilizecss', $template_url . '/css/materialize.css', null, 'all');
	wp_enqueue_style ('Stylecss', $template_url . '/css/style.css', null, 'all');
	wp_enqueue_style ('slickCSS', $template_url . '/slick/slick.css');
	wp_enqueue_style ('slickThemeCSS', $template_url . '/slick/slick-theme.css');
		wp_enqueue_style ('FontAwesome 5.0', $template_url . '/fontawesome/css/all.css');


//	wp_enqueue_script ('MaterializeJS', $template_url . '/js/materialize.min.js', array( '' ), null, 'all');
	wp_enqueue_script ('jQuery1.11', $template_url . '/js/jquery-1.11.0.min.js');
	wp_enqueue_script ('jQuery-Migrate', $template_url . '/js/jquery-migrate-1.2.1.min.js');
	wp_enqueue_script ('slickJS', $template_url . '/slick/slick.min.js');
	//Carregando MaterializeJS
	wp_enqueue_script ('MaterializeJS', $template_url . '/js/materialize.js');
	wp_enqueue_script ('CustomJS', $template_url . '/js/custom.js');

	// Html5Shiv
	wp_enqueue_script( 'html5shiv', $template_url . '/assets/js/html5.js' );
	wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );

	// General scripts.
//	if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {


		// FitVids.
		//  wp_enqueue_script( 'fitvids', $template_url . '/assets/js/libs/jquery.fitvids.js', array( 'jquery' ), null, true );

		// Main.
		// wp_enqueue_script( 'odin-main', $template_url . '/assets/js/main.js', array( 'jquery' ), null, true );
//  } else {
		// Grunt main file with Bootstrap, FitVids and others libs.
	//	wp_enqueue_script( 'odin-main-min', $template_url . '/assets/js/main.min.js', array( 'jquery' ), null, true );
//	}

	// Grunt watch livereload in the browser.
	 // wp_enqueue_script( 'odin-livereload', 'http://localhost:35729/livereload.js?snipver=1', array(), null, true );

	// Load Thread comments WordPress script.
	if ( is_singular() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'odin_enqueue_scripts', 1 );

/**
 * Odin custom stylesheet URI.
 *
 * @since  2.2.0
 *
 * @param  string $uri Default URI.
 * @param  string $dir Stylesheet directory URI.
 *
 * @return string      New URI.
 */
function odin_stylesheet_uri( $uri, $dir ) {
	return $dir . '/assets/css/style.css';
}

add_filter( 'stylesheet_uri', 'odin_stylesheet_uri', 10, 2 );

/**
 * Query WooCommerce activation
 *
 * @since  2.2.6
 *
 * @return boolean
 */
if ( ! function_exists( 'is_woocommerce_activated' ) ) {
	function is_woocommerce_activated() {
		return class_exists( 'woocommerce' ) ? true : false;
	}
}

/**
 * Core Helpers.
 */
require_once get_template_directory() . '/core/helpers.php';

/**
 * WP Custom Admin.
 */
require_once get_template_directory() . '/inc/admin.php';

/**
 * Comments loop.
 */
require_once get_template_directory() . '/inc/comments-loop.php';

/**
 * WP optimize functions.
 */
require_once get_template_directory() . '/inc/optimize.php';

/**
 * Custom template tags.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * WooCommerce compatibility files.
 */
if ( is_woocommerce_activated() ) {
	add_theme_support( 'woocommerce' );
	require get_template_directory() . '/inc/woocommerce/hooks.php';
	require get_template_directory() . '/inc/woocommerce/functions.php';
	require get_template_directory() . '/inc/woocommerce/template-tags.php';
}


//Limitar con la funcion get_the_excerpt
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
  array_pop($excerpt);
  $excerpt = implode(" ",$excerpt).'...';
  } else {
  $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

//img-responsive para as imagens dentro do file_get_contents
add_filter( 'the_content', 'wpse_add_img_post_class' );
function wpse_add_img_post_class( $content ) {
    // Bail if there is no content to work with.
    if ( ! $content ) {
        return $content;
    }

    // Create an instance of DOMDocument.
    $dom = new \DOMDocument();

    // Supress errors due to malformed HTML.
    // See http://stackoverflow.com/a/17559716/3059883
    $libxml_previous_state = libxml_use_internal_errors( true );

    // Populate $dom with $content, making sure to handle UTF-8.
    // Also, make sure that the doctype and HTML tags are not added to our
    // HTML fragment. http://stackoverflow.com/a/22490902/3059883
    $dom->loadHTML( mb_convert_encoding( $content, 'HTML-ENTITIES', 'UTF-8' ),
          LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD );

    // Restore previous state of libxml_use_internal_errors() now that we're done.
    libxml_use_internal_errors( $libxml_previous_state );

    // Create an instance of DOMXpath.
    $xpath = new \DOMXpath( $dom );

    // Get images then loop through and add additional classes.
    $imgs = $xpath->query( "//img" );
    foreach ( $imgs as $img ) {
        $existing_class = $img->getAttribute( 'class' );
        $img->setAttribute( 'class', "{$existing_class} responsive-img" );
    }

    // Save and return updated HTML.
    $new_content = $dom->saveHTML();
    return $new_content;
}


remove_action( 'rest_api_init', 'rest_api_default_filters', 10, 1 );
