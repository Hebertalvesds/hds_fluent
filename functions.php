<?php
add_theme_support( 'custom-logo');

function has_images_by_post_id(WP_POST $post = null)
{ 	
    $post = get_post($post->id);
	$content = $post->post_content;
    preg_match_all('/wp-block-cover/', $content, $matches_0);
	preg_match_all('/wp-block-image/', $content, $matches_1);
    return (count($matches_0[0]) > 0 || count($matches_1[0]) > 0) ? true : false;
}

function has_image_header(WP_Post $post = null)
{ 
    $post = get_post($post->id);
	$content = $post->post_content;
	preg_match_all('/wp-block-cover/', $content, $matches_0);
    return (count($matches_0[0]) > 0) ? true : false;
}
function get_background_image_header($post_content){
	$pattern = '/background-image:(.*)\)/';
	preg_match($pattern,$post_content,$match);
	return $match[0];
}
function get_post_image($post_content){
	$pattern = '/<img\s+.*?src=[\"\']?([^\"\' >]*)[\"\']?[^>]*>/i';
	preg_match($pattern,$post_content,$match);
	return "background-image:url({$match[1]})";
}
function header_post_image_css() 
{
	wp_enqueue_style('custom', get_template_directory_uri() . '/assets/custom.css');
	add_action('wp_enqueue_scripts', 'header_post_image_css');
}

/**
 * Criando uma area de widgets
 *
 */
function widgets_novos_widgets_init() {

	register_sidebar( array(
		'name' => 'SidebarLeft',
		'id' => 'left',
		'before_widget' => '<div>',
		'after_widget' => '</div>'
	) );

	register_sidebar( array(
		'name' => 'SidebarRight',
		'id' => 'right',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );

	register_sidebar(array(
		'name' => 'Widget Menu',
		'id' => 'top',
		'before_widget' => '<div v-shwo="submenu">',
		'after_widget' => '</div>',
		'before_title' => '<span class="widget-title" style="display:none;">',
		'after_title' => '</span>'
	));

	register_sidebar(array(
		'name' => 'Social Links',
		'id' => 'social',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<span">',
		'after_title' => '</span>'
	));
}
add_action( 'widgets_init', 'widgets_novos_widgets_init' );

function hds_setup() {
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 100,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'hds_setup' );

function register_hds_menus(){
	register_nav_menus(
		array(
			'top_menu' => _('Header Menu'),
			'footer_menu' => _('Footer Menu'),
			'left_menu' => _('Sidebar Menu'),
			'social_menu'=> _('Social Menu')	
		)
	);
}
add_action('init', 'register_hds_menus');
?>
