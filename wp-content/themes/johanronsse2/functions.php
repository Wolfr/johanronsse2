<?php

add_action( 'after_setup_theme', 'johanronsse_setup' );

function johanronsse_setup() {
    load_theme_textdomain( 'johanronsse', get_template_directory() . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );

    global $content_width;
    if ( ! isset( $content_width ) ) $content_width = 840;
    
    register_nav_menus(
        array( 'main-menu' => __( 'Main Menu', 'johanronsse' ) )
    );
}

add_action( 'wp_enqueue_scripts', 'johanronsse_load_scripts' );

function johanronsse_load_scripts() {
    wp_enqueue_script( 'jquery' );
}

add_action( 'comment_form_before', 'johanronsse_enqueue_comment_reply_script' );

function johanronsse_enqueue_comment_reply_script() {
    if (
        get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
}

add_filter( 'the_title', 'johanronsse_title' );

function johanronsse_title( $title ) {
    if ( $title == '' ) {
        return '&rarr;';
    } else {
        return $title;
    }
}

add_filter( 'wp_title', 'johanronsse_filter_wp_title' );

function johanronsse_filter_wp_title( $title )
{
    return $title . esc_attr( get_bloginfo( 'name' ) );
}

add_action( 'widgets_init', 'johanronsse_widgets_init' );

function johanronsse_widgets_init() {
    register_sidebar( array (
    'name' => __( 'Sidebar Widget Area', 'johanronsse' ),
    'id' => 'primary-widget-area',
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
    'after_widget' => "</li>",
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );
}

function johanronsse_custom_pings( $comment ) {
    $GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php }
add_filter( 'get_comments_number', 'johanronsse_comments_number' );
function johanronsse_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
    return count( $comments_by_type['comment'] );
} else {
    return $count;
}
}

/**
 * Remove Emoji Cruft
 */

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'wp_generator');

add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

/* Code syntax block
   ========================================================================== */

add_filter( 'mkaz_code_syntax_language_list', function() {
    return array(
        "apacheconf" => "Apache",
        "bash" => "Bash",
        "css" => "CSS",
        "html" => "HTML",
        "javascript" => "JavaScript",
        "json" => "JSON",
        "markdown" => "Markdown",
        "php" => "PHP",
        "python" => "Python",
        "jsx" => "React JSX",
        "sass" => "Sass",
        "svg" => "SVG",
        "pug" => "Pug",
        "xml" => "XML",
        "yaml" => "YAML",   
    );
} );

add_filter( 'mkaz_code_syntax_default_lang', function() { return 'javascript'; });
add_filter( 'mkaz_prism_css_url', function() {
    return '/wp-content/themes/johanronsse2/css/prism.css'; 
});