<?php 
add_action( 'after_setup_theme', 'et_setup_theme' );
if ( ! function_exists( 'et_setup_theme' ) ){
	function et_setup_theme(){
		require_once(TEMPLATEPATH . '/epanel/custom_functions.php'); 

		require_once(TEMPLATEPATH . '/includes/functions/comments.php'); 

		require_once(TEMPLATEPATH . '/includes/functions/sidebars.php'); 

		load_theme_textdomain('DeepFocus',get_template_directory().'/lang');

		require_once(TEMPLATEPATH . '/epanel/options_deepfocus.php');

		require_once(TEMPLATEPATH . '/epanel/core_functions.php'); 

		require_once(TEMPLATEPATH . '/epanel/post_thumbnails_deepfocus.php');
		
		include(TEMPLATEPATH . '/includes/widgets.php');
	}
}

add_action('wp_head','et_portfoliopt_additional_styles',100);
function et_portfoliopt_additional_styles(){ ?>
	<style type="text/css">
		div.pp_default .pp_content_container .pp_details { color: #666; }
	</style>
<?php }

function et_insert_thumbnail_rss($content) {
	global $post;

	$thumb = ''; $thumb = get_post_meta($post->ID, 'Thumbnail',true);

	if ( has_post_thumbnail( $post->ID ) ){
		$content = '<p>' . get_the_post_thumbnail( $post->ID, 'medium' ) . '</p>' . $content;
	} else if ($thumb <> '') {
		$content = '<p>' . '<img src="'. et_new_thumb_resize( et_multisite_thumbnail($thumb), 300, 200, '', true ) .'"/>' . '</p>' . $content;
	}

	return $content;
}
add_filter('the_excerpt_rss', 'et_insert_thumbnail_rss');
add_filter('the_content_feed', 'et_insert_thumbnail_rss');

function register_main_menus() {
	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' )
		)
	);
}
if (function_exists('register_nav_menus')) add_action( 'init', 'register_main_menus' );

if ( ! function_exists( 'et_list_pings' ) ){
	function et_list_pings($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment; ?>
		<li id="comment-<?php comment_ID(); ?>"><?php comment_author_link(); ?> - <?php comment_excerpt(); ?>
	<?php } 
} ?>