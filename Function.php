<?php wp_head(); ?>
<?php wp_body();
// Custom Post Type
function create_my_custom_post() {
    register_post_type( 'my-custom-post',
    array(
    'labels' => array(
    'name' => __( 'My Custom Post' ),
    'singular_name' => __( 'My Custom Post' ),
    ),
    'public' => true,
    'has_archive' => true,
    'supports' => array(
    'title',

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );
</head> 
<?php wp_footer(); ?>
// Support Featured Images
add_theme_support( 'post-thumbnails' );
function custom_settings_page() { ?>
    <div class="wrap">
    <h1>Custom Settings</h1>
    <form method="post" action="options.php">
    <?php settings_fields( 'section' );
    do_settings_sections( 'theme-options' );
    submit_button(); ?>
    </form>
    </div>
    <?php }
add_theme_support( 'title-tag' );
function votre_fonction() { //code }
add_action( 'action', 'votre_fonction');
// Add scripts and stylesheets
function startwordpress_scripts() {
 wp_enqueue_style( 'bootstrap', get_template_directory_uri() .
'/css/bootstrap.min.css', array(), '3.3.6' );
 wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css'
);
 wp_enqueue_script( 'bootstrap', get_template_directory_uri() .
'/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
function custom_settings_add_menu() {
    add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options',
   'custom-settings', 'custom_settings_page', null, 99 );
   }
   add_action( 'admin_menu', 'c
?>




