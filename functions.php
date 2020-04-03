<?php /*-----------------------------------------------------------------------------------*//* Include Theme Functions *//*-----------------------------------------------------------------------------------*/
function virtue_lang_setup()
{
    load_theme_textdomain('virtue', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'virtue_lang_setup');

/* Init Theme Options */
require_once locate_template('/themeoptions/framework.php');
/* Options framework*/
require_once locate_template('/themeoptions/options.php');
/*Options framework*/
require_once locate_template('/themeoptions/options/virtue_extension.php');
/*Options framework extension*/
require_once locate_template('/lib/utils.php');
/*Utility functions*/
require_once locate_template('/lib/init.php');
/*Initial theme setup and constants*/
require_once locate_template('/lib/sidebar.php');
/*Sidebar class*/
require_once locate_template('/lib/config.php');
/*Configuration*/
require_once locate_template('/lib/cleanup.php');
/*Cleanup*/
require_once locate_template('/lib/nav.php');
/*Custom nav modifications*/
require_once locate_template('/lib/metaboxes.php');
/*Custom metaboxes*/
require_once locate_template('/lib/comments.php');
/*Custom comments modifications*/
require_once locate_template('/lib/widgets.php');
/*Sidebars and widgets*/
require_once locate_template('/lib/aq_resizer.php');
/*Resize on the fly*/
require_once locate_template('/lib/scripts.php');
/*Scripts and stylesheets*/
require_once locate_template('/lib/custom.php');
/*Custom functions*/
require_once locate_template('/lib/admin_scripts.php');
/*Icon functions*/
require_once locate_template('/lib/authorbox.php');
/*Author box*/
require_once locate_template('/lib/template_hooks/portfolio_hooks.php');
/*Portfolio Template Hooks*/
require_once locate_template('/lib/template_hooks/post_hooks.php');
/*Post Template Hooks*/
require_once locate_template('/lib/template_hooks/page_hooks.php');
/*Post Template Hooks*/
require_once locate_template('/lib/custom-woocommerce.php');
/*Woocommerce functions*/
require_once locate_template('/lib/woo-account.php');
/*Woocommerce functions*/
require_once locate_template('/lib/virtuetoolkit-activate.php');
/*Plugin Activation*/
require_once locate_template('/lib/custom-css.php');
/*Fontend Custom CSS*/

function remove_more_link_scroll( $link ) {
    $link = preg_replace( '|#more-[0-9]+|', '', $link );
    return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );

/*function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">Your Read More Link Text</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );*/

// Replaces the excerpt "Read More" text by a link
/*function new_excerpt_more($more) {
    global $post;
    return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read the full article...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');*/

/*function child_theme_setup() {
    // override parent theme's 'more' text for excerpts
    remove_filter( 'excerpt_more', 'twentyeleven_auto_excerpt_more' );
    remove_filter( 'get_the_excerpt', 'twentyeleven_custom_excerpt_more' );
}
add_action( 'after_setup_theme', 'child_theme_setup' );*/
