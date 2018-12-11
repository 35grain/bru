<?php 
// Custom stylesheet location
add_action( 'wp_enqueue_scripts', 'enqueue_theme_css' );

function enqueue_theme_css()
{
    wp_enqueue_style(
        'default',
        get_template_directory_uri() . '/css/main.min.css'
    );
}

// Custom scripts and stylesheet location
function add_theme_scripts() {      
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/page-transition.js', array ( 'jquery' ), 1.0, true);
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// Custom fields
if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_5bf83ceb1a9ff',
		'title' => 'Content Page Header',
		'fields' => array(
			array(
				'key' => 'field_5bf83d27d68f8',
				'label' => 'Custom content title',
				'name' => 'custom_content_title',
				'type' => 'textarea',
				'instructions' => 'The red title shown before actual content. Lines appear as written.',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'new_lines' => 'br',
			),
			array(
				'key' => 'field_5bf83fccbd873',
				'label' => 'Cover image',
				'name' => 'cover_image',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'array',
				'preview_size' => 'medium',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array(
				'key' => 'field_5bf8477d5f06e',
				'label' => 'Invert image colors',
				'name' => 'invert_image_colors',
				'type' => 'true_false',
				'instructions' => 'Applies for night theme to save your eyeballs from ze blue light.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => '',
				'default_value' => 0,
				'ui' => 0,
				'ui_on_text' => '',
				'ui_off_text' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'default',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'acf_after_title',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));
	
	acf_add_local_field_group(array(
		'key' => 'group_5bf8425557bc1',
		'title' => 'Content Page Left Sidebar',
		'fields' => array(
			array(
				'key' => 'field_5bf8426cf97ab',
				'label' => 'Profile Image',
				'name' => 'profile_image',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'array',
				'preview_size' => 'thumbnail',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array(
				'key' => 'field_5bf844e834992',
				'label' => 'Social Name',
				'name' => 'social_name',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5bf84286f97ac',
				'label' => 'Social info',
				'name' => 'social_info',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'delay' => 0,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'default',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));
	
	acf_add_local_field_group(array(
		'key' => 'group_5bf827112c5f2',
		'title' => 'Front-page',
		'fields' => array(
			array(
				'key' => 'field_5bf8274e84490',
				'label' => 'Title message',
				'name' => 'title_message',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => 'title',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => 'Say hi!',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5c0fd2b034fbe',
				'label' => 'Subtitle',
				'name' => 'subtitle',
				'type' => 'text',
				'instructions' => 'Add something important here',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5bf9770d19076',
				'label' => 'Hover text',
				'name' => 'hover_text',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'Learn more',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'front-page.php',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));
	
	endif;

// Custom front-page menu
function wpb_custom_new_menu() {
	register_nav_menu('front-page-menu',__( 'Front-Page Menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );

// Custom Page Titles
add_action('admin_menu', 'custom_title');
add_action('save_post', 'save_custom_title');
add_action('wp_head','insert_custom_title');
function custom_title() {
	add_meta_box('custom_title', 'Change page title', 'custom_title_input_function', 'post', 'normal', 'high');
	add_meta_box('custom_title', 'Change page title', 'custom_title_input_function', 'page', 'normal', 'high');
}
function custom_title_input_function() {
	global $post;
	echo '<input type="hidden" name="custom_title_input_hidden" id="custom_title_input_hidden" value="'.wp_create_nonce('custom-title-nonce').'" />';
	echo '<input type="text" name="custom_title_input" id="custom_title_input" style="width:100%;" value="'.get_post_meta($post->ID,'_custom_title',true).'" />';
}
function save_custom_title($post_id) {
	if (!wp_verify_nonce($_POST['custom_title_input_hidden'], 'custom-title-nonce')) return $post_id;
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return $post_id;
	$customTitle = $_POST['custom_title_input'];
	update_post_meta($post_id, '_custom_title', $customTitle);
}
function insert_custom_title() {
	if (have_posts()) : the_post();
	  $customTitle = get_post_meta(get_the_ID(), '_custom_title', true);
	  if ($customTitle) {
		echo "<title>$customTitle</title>";
      } else {
    	echo "<title>";
	      if (is_tag()) {
	         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
	      elseif (is_archive()) {
	         wp_title(''); echo ' Archive - '; }
	      elseif ((is_single()) || (is_page()) && (!(is_front_page())) ) {
	         wp_title(''); }
	      else {
	          bloginfo('name'); }
	      if ($paged>1) {
	         echo ' - page '. $paged; }
        echo "</title>";
    }
    else :
		echo "<title>you're lost, bru.";
		echo "</title>";
	endif;
	rewind_posts();
}
?>