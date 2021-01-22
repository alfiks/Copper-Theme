<?php


add_action( 'after_setup_theme', 'copper_setup' );
function copper_setup()
{
load_theme_textdomain( 'copper', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 
	'main-menu' => __( 'Main Menu', 'copper' ),
	'nav-menu' => __( 'Nav Menu', 'copper' ),
)
);
}

add_action( 'wp_enqueue_scripts', 'copper_load_scripts' );
function copper_load_scripts()
{
wp_enqueue_script( 'jquery' );
}
add_action( 'comment_form_before', 'copper_enqueue_comment_reply_script' );
function copper_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'copper_title' );
function copper_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}

add_filter( 'wp_title', 'copper_filter_wp_title' );
function copper_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'copper_widgets_init' );
function copper_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'copper' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h4 class="widget-title">',
'after_title' => '</h4>',
) );
    
    
    register_sidebar( array (
'name' => __( 'footer', 'copper' ),
'id' => 'primary-widget-footer',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h5 class="widget-title">',
'after_title' => '</h5>',
) );
    
    
}


  

add_theme_support( 'custom-background' );

$defaults = array(
	'default-color'          => '',
	'default-image'          => '',
	'default-repeat'         => 'repeat',
	'default-position-x'     => 'left',
        'default-position-y'     => 'top',
        'default-size'           => 'auto',
	'default-attachment'     => 'scroll',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );
add_theme_support( 'custom-logo' );
add_theme_support( 'custom-logo', array(
	'height'      => 48,
	'width'       => 200,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );

add_filter('woocommerce_enqueue_styles', '__return_empty_array');

add_action( 'wp_head', 'blankslate_pingback_header' );
function blankslate_pingback_header() {
if ( is_singular() && pings_open() ) {
printf( '<link rel="pingback" href="%s" />' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
}
}
add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script() {
if ( get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}
}
function blankslate_custom_pings( $comment ) {
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php
}
add_filter( 'get_comments_number', 'blankslate_comment_count', 0 );
function blankslate_comment_count( $count ) {
if ( ! is_admin() ) {
global $id;
$get_comments = get_comments( 'status=approve&post_id=' . $id );
$comments_by_type = separate_comments( $get_comments );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'copper'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'copper'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); ?></a>
	<?php
	$fragments['a.cart-customlocation'] = ob_get_clean();
	return $fragments;
}



?>

<?php
$hd = array(
	'flex-width'    => true,
	'width'         => 980,
	'flex-height'    => true,
	'height'        => 200,
);
add_theme_support( 'custom-header', $hd );
?>

<?php 
/**
 * Check if WooCommerce is activated
 */

		if ( class_exists( 'woocommerce' ) ) {
        add_filter('wp_head', 'wpo_menu_cart_custom_a');
function wpo_menu_cart_custom_a()
{
	global $woocommerce;
	$items = $woocommerce->cart->get_cart();
	if( count($items) == 0 || empty($items) ) {
		?>
		<style>
			a.cart-contents { display: none !important; }
		</style>
		<?php
	}

}
      
	
}

add_theme_support( 'editor-color-palette', array(
	array(
		'name'  => __( 'Cooper', 'copper' ),
		'slug'  => 'copper-light',
		'color'	=> '#AE8871',
	),
	array(
		'name'  => __( 'Copper Dark', 'copper' ),
		'slug'  => 'copper-dark',
		'color' => '#816D76',
	),
	array(
		'name'  => __( 'White', 'copper' ),
		'slug'  => 'white',
		'color' => '#fff',
	)
	,
	array(
		'name'  => __( 'White', 'copper' ),
		'slug'  => 'black',
		'color' => '#000',
	)
) );


?>