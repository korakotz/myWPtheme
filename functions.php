<?php
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
require_once dirname( __FILE__ ) . '/inc/options-framework.php';

// Loads options.php from child or parent theme
$optionsfile = locate_template( 'options.php' );
load_template( $optionsfile );

function theme_slug_setup() {
   add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'theme_slug_setup' );

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'WP-Trigger' ),
	'bottom' => __( 'Bottom Menu', 'WP-Trigger' ),
) );

function themebasic_load(){
	wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/lumen.css');
	wp_enqueue_style('custom', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_style('odometer', get_stylesheet_directory_uri() . '/css/odometer-theme-train-station.css');
	wp_enqueue_style('animate', get_stylesheet_directory_uri() . '/css/animate.css');
	wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css');
	wp_enqueue_script('jquery2.1.4', get_stylesheet_directory_uri() . '/js/jquery.min.js');
	wp_enqueue_script('bootstrapjs', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
	wp_enqueue_script('odometerjs', get_stylesheet_directory_uri() . '/js/odometer.js');
}
add_action('wp_enqueue_scripts', 'themebasic_load');

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 250, 250 , true);
add_image_size('large', 9999, 350);

// extra profile field
add_action( 'show_user_profile', 'add_extra_social_links' );
add_action( 'edit_user_profile', 'add_extra_social_links' );
function add_extra_social_links( $user )
{
    ?>
        <h3>New User Profile Links</h3>

        <table class="form-table">
            <tr>
                <th><label for="facebook_profile">Facebook Profile</label></th>
                <td><input type="text" name="facebook_profile" value="<?php echo esc_attr(get_the_author_meta( 'facebook_profile', $user->ID )); ?>" class="regular-text" /></td>
            </tr>

            <tr>
                <th><label for="twitter_profile">Twitter Profile</label></th>
                <td><input type="text" name="twitter_profile" value="<?php echo esc_attr(get_the_author_meta( 'twitter_profile', $user->ID )); ?>" class="regular-text" /></td>
            </tr>

			<tr>
                <th><label for="linkedin_profile">Linkedin Profile</label></th>
                <td><input type="text" name="linkedin_profile" value="<?php echo esc_attr(get_the_author_meta( 'linkedin_profile', $user->ID )); ?>" class="regular-text" /></td>
            </tr>

            <tr>
                <th><label for="google_profile">Google+ Profile</label></th>
                <td><input type="text" name="google_profile" value="<?php echo esc_attr(get_the_author_meta( 'google_profile', $user->ID )); ?>" class="regular-text" /></td>
            </tr>
        </table>
    <?php
}

add_action( 'personal_options_update', 'save_extra_social_links' );
add_action( 'edit_user_profile_update', 'save_extra_social_links' );

function save_extra_social_links( $user_id )
{
    update_user_meta( $user_id,'facebook_profile', sanitize_text_field( $_POST['facebook_profile'] ) );
    update_user_meta( $user_id,'twitter_profile', sanitize_text_field( $_POST['twitter_profile'] ) );
	update_user_meta( $user_id,'linkedin_profile', sanitize_text_field( $_POST['linkedin_profile'] ) );
    update_user_meta( $user_id,'google_profile', sanitize_text_field( $_POST['google_profile'] ) );
}
// end extra profile field

// Sidebar
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.' ),
        'before_widget' => '<li id="%1$s" class="widget wiget-main %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
    ) );
	register_sidebar( array(
	'name' => 'Footer Sidebar 1',
	'id' => 'footer-sidebar-1',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget widget-footer %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
	register_sidebar( array(
	'name' => 'Footer Sidebar 2',
	'id' => 'footer-sidebar-2',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget widget-footer %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
	register_sidebar( array(
	'name' => 'Footer Sidebar 3',
	'id' => 'footer-sidebar-3',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget widget-footer %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
}
// end Sidebar
// pagenitation
function custom_pagination() {
    global $wp_query;
    $big = 999999999;
    $pages = paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?page=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'prev_next' => false,
        'type' => 'array',
        'prev_next' => TRUE,
        'prev_text' => '&larr; Previous',
        'next_text' => 'Next &rarr;',
            ));
    if (is_array($pages)) {
        $current_page = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<ul class="pagination">';
        foreach ($pages as $i => $page) {
            if ($current_page == 1 && $i == 0) {
                echo "<li class='active'>$page</li>";
            } else {
                if ($current_page != 1 && $current_page == $i) {
                    echo "<li class='active'>$page</li>";
                } else {
                    echo "<li>$page</li>";
                }
            }
        }
        echo '</ul>';
    }
}
// end page
// search form
function my_search_form( $form ) {
    $form =
	'<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <div class="form-group">
    	<input placeholder="ใส่คำค้นหา" class="form-control" type="text" value="' . get_search_query() . '" name="s" id="s" />
    </div>
    </form>';

    return $form;
}
add_filter( 'get_search_form', 'my_search_form' );
//  end search form



/***************************************************
 * Register a portfolio post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 ***************************************************/
add_action( 'init', 'codex_portfolio_init' );
function codex_portfolio_init() {
	$labels = array(
		'name'               => _x( 'Portfolios', 'post type general name', 'WP-Trigger' ),
		'singular_name'      => _x( 'Portfolio', 'post type singular name', 'WP-Trigger' ),
		'menu_name'          => _x( 'Portfolios', 'admin menu', 'WP-Trigger' ),
		'name_admin_bar'     => _x( 'Portfolio', 'add new on admin bar', 'WP-Trigger' ),
		'add_new'            => _x( 'Add New', 'portfolio', 'WP-Trigger' ),
		'add_new_item'       => __( 'Add New Portfolio', 'WP-Trigger' ),
		'new_item'           => __( 'New Portfolio', 'WP-Trigger' ),
		'edit_item'          => __( 'Edit Portfolio', 'WP-Trigger' ),
		'view_item'          => __( 'View Portfolio', 'WP-Trigger' ),
		'all_items'          => __( 'All Portfolios', 'WP-Trigger' ),
		'search_items'       => __( 'Search Portfolios', 'WP-Trigger' ),
		'parent_item_colon'  => __( 'Parent Portfolios:', 'WP-Trigger' ),
		'not_found'          => __( 'No Portfolios found.', 'WP-Trigger' ),
		'not_found_in_trash' => __( 'No Portfolios found in Trash.', 'WP-Trigger' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Portfolio post type.', 'WP-Trigger' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'portfolio', $args );
}


 /***************************************************
  * // create taxonomies for the post type "portfolio"
  *
  *
  ***************************************************/
// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_portfolio_taxonomies', 0 );
function create_portfolio_taxonomies() {
	// Add new taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name'                       => _x( 'Tags', 'taxonomy general name' ),
		'singular_name'              => _x( 'Tag', 'taxonomy singular name' ),
		'search_items'               => __( 'Search Tags' ),
		'popular_items'              => __( 'Popular Tags' ),
		'all_items'                  => __( 'All Tags' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Tag' ),
		'update_item'                => __( 'Update Tag' ),
		'add_new_item'               => __( 'Add New Tag' ),
		'new_item_name'              => __( 'New Tag Name' ),
		'separate_items_with_commas' => __( 'Separate tags with commas' ),
		'add_or_remove_items'        => __( 'Add or remove tags' ),
		'choose_from_most_used'      => __( 'Choose from the most used tags' ),
		'not_found'                  => __( 'No tags found.' ),
		'menu_name'                  => __( 'Tags' ),
	);

	$args = array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'portfoliotag' ),
	);

	register_taxonomy( 'portfoliotag', 'portfolio', $args );
}
/***************************************************
 * END
 ***************************************************
 *
 ***************************************************/


 /***************************************************
  * Register a Testimonial post type.
  *
  * @link http://codex.wordpress.org/Function_Reference/register_post_type
  ***************************************************/
 add_action( 'init', 'codex_testimonial_init' );
 function codex_testimonial_init() {
 	$labels = array(
 		'name'               => _x( 'Testimonials', 'post type general name', 'WP-Trigger' ),
 		'singular_name'      => _x( 'Testimonial', 'post type singular name', 'WP-Trigger' ),
 		'menu_name'          => _x( 'Testimonials', 'admin menu', 'WP-Trigger' ),
 		'name_admin_bar'     => _x( 'Testimonial', 'add new on admin bar', 'WP-Trigger' ),
 		'add_new'            => _x( 'Add New', 'testimonial', 'WP-Trigger' ),
 		'add_new_item'       => __( 'Add New Testimonial', 'WP-Trigger' ),
 		'new_item'           => __( 'New Testimonial', 'WP-Trigger' ),
 		'edit_item'          => __( 'Edit Testimonial', 'WP-Trigger' ),
 		'view_item'          => __( 'View Testimonial', 'WP-Trigger' ),
 		'all_items'          => __( 'All Testimonials', 'WP-Trigger' ),
 		'search_items'       => __( 'Search Testimonials', 'WP-Trigger' ),
 		'parent_item_colon'  => __( 'Parent Testimonials:', 'WP-Trigger' ),
 		'not_found'          => __( 'No Testimonials found.', 'WP-Trigger' ),
 		'not_found_in_trash' => __( 'No Testimonials found in Trash.', 'WP-Trigger' )
 	);

 	$args = array(
 		'labels'             => $labels,
                 'description'        => __( 'Testimonial post type.', 'WP-Trigger' ),
 		'public'             => true,
 		'publicly_queryable' => true,
 		'show_ui'            => true,
 		'show_in_menu'       => true,
 		'query_var'          => true,
 		'rewrite'            => array( 'slug' => 'testimonial' ),
 		'capability_type'    => 'post',
 		'has_archive'        => true,
 		'hierarchical'       => false,
 		'menu_position'      => null,
 		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' )
 	);

 	register_post_type( 'testimonial', $args );
 }


  /***************************************************
   * // create taxonomies for the post type "portfolio"
   *
   *
   ***************************************************/
 // hook into the init action and call create_book_taxonomies when it fires
 add_action( 'init', 'create_testimonial_taxonomies', 0 );
 function create_testimonial_taxonomies() {
 	// Add new taxonomy, NOT hierarchical (like tags)
 	$labels = array(
 		'name'                       => _x( 'Tags', 'taxonomy general name' ),
 		'singular_name'              => _x( 'Tag', 'taxonomy singular name' ),
 		'search_items'               => __( 'Search Tags' ),
 		'popular_items'              => __( 'Popular Tags' ),
 		'all_items'                  => __( 'All Tags' ),
 		'parent_item'                => null,
 		'parent_item_colon'          => null,
 		'edit_item'                  => __( 'Edit Tag' ),
 		'update_item'                => __( 'Update Tag' ),
 		'add_new_item'               => __( 'Add New Tag' ),
 		'new_item_name'              => __( 'New Tag Name' ),
 		'separate_items_with_commas' => __( 'Separate tags with commas' ),
 		'add_or_remove_items'        => __( 'Add or remove tags' ),
 		'choose_from_most_used'      => __( 'Choose from the most used tags' ),
 		'not_found'                  => __( 'No tags found.' ),
 		'menu_name'                  => __( 'Tags' ),
 	);

 	$args = array(
 		'hierarchical'          => false,
 		'labels'                => $labels,
 		'show_ui'               => true,
 		'show_admin_column'     => true,
 		'update_count_callback' => '_update_post_term_count',
 		'query_var'             => true,
 		'rewrite'               => array( 'slug' => 'testimonialtag' ),
 	);

 	register_taxonomy( 'testimonialtag', 'testimonial', $args );
 }
 /***************************************************
  * END
  ***************************************************
  *
  ***************************************************/


//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_book_taxonomies');

// create two taxonomies, genres and writers for the post type "book"
function create_book_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Categories' ),
		'all_items'         => __( 'All Categories' ),
		'parent_item'       => __( 'Parent Category' ),
		'parent_item_colon' => __( 'Parent Category:' ),
		'edit_item'         => __( 'Edit Category' ),
		'update_item'       => __( 'Update Category' ),
		'add_new_item'      => __( 'Add New Category' ),
		'new_item_name'     => __( 'New Category Name' ),
		'menu_name'         => __( 'Category' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'category-book' ),
	);

	register_taxonomy( 'Categories', 'book', $args );
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'my_theme_setup' );
function my_theme_setup(){
    load_theme_textdomain( 'WP-Trigger', get_template_directory() . '/languages' );
}
// Related Posts Function, matches posts by tags - call using joints_related_posts(); )
function joints_related_posts()
{
	$orig_post = $post;
	global $post;
	$categories = get_the_category($post->ID);
	if ($categories)
	{
	$category_ids = array();
	foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
	$args=array(
	'category__in' => $category_ids,
	'post__not_in' => array($post->ID),
	'posts_per_page'=> 4, // Number of related posts that will be displayed.
	'caller_get_posts'=>1,
	'orderby'=>'rand' // Randomize the posts
	);
	$my_query = new wp_query( $args );
		if( $my_query->have_posts() )
		{
			echo '<div id="related_posts" class="clear"><h3 class="page-header">Related Posts</h3>';
			while( $my_query->have_posts() )
			{
				$my_query->the_post(); ?>
				<div class="col-md-6 col-sm-6 text-center">
					<div class="caption">
				 <a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>">
				 <?php the_post_thumbnail( 'related-posts' ); ?>
				 </a>
				 <div class="related_content">
				 <a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				 </div>
			 		</div>
			 	</div>
				<?php
			}
			echo '</div>';
		}
	}
	$post = $orig_post;
	wp_reset_query();
}

/*
 * This is an example of how to override a default filter
 * for 'textarea' sanitization and $allowedposttags + embed and script.
 */
add_action('admin_init','optionscheck_change_santiziation', 100);

function optionscheck_change_santiziation() {
    remove_filter( 'of_sanitize_textarea', 'of_sanitize_textarea' );
    add_filter( 'of_sanitize_textarea', 'custom_sanitize_textarea' );
}

function custom_sanitize_textarea($input) {
    global $allowedposttags;
    $custom_allowedtags["iframe"] = array(
      "src" => array(),
      "allowfullscreen" => array(),
      "allowscriptaccess" => array(),
      "height" => array(),
      "width" => array()
      );
      $custom_allowedtags["script"] = array();

      $custom_allowedtags = array_merge($custom_allowedtags, $allowedposttags);
      $output = wp_kses( $input, $custom_allowedtags);
    return $output;
}
// Enable shortcodes in text widgets
add_filter('widget_text','do_shortcode');
