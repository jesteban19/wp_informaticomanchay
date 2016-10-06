<?php

// register nav walker class_alias
require_once('wp_bootstrap_navwalker.php');

//theme suport

function wpi_theme_setup(){
    add_theme_support('post-thumbnails');
    //menu de navegacion
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));

    //post formats

    add_theme_support('post-formats',array('aside','gallery'));
}

add_action('after_setup_theme','wpi_theme_setup');

//excerpt length control

function set_excerpt_length()
{
    return 45;
}

add_filter('excerpt_length','set_excerpt_length');


//widgets
function wpi_init_widgets(){
	register_sidebar(array(
		'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget' => '</div></div>',
        'before_title' => '<h4>',
        'after_title' => '</h4><div class="container">'
	));
}
add_action('widgets_init','wpi_init_widgets');


// creacion de portafolio

if ( ! function_exists('custom_post_type_portafolio') ) {

    // Register Custom Post Type
    function custom_post_type_portafolio() {

        $labels = array(
             'name' => _x( 'Proyectos', 'Post Type General Name', 'text_domain' ),
             'singular_name' => _x( 'Proyecto', 'Post Type Singular Name', 'text_domain' ),
             'menu_name' => __( 'Portafolio', 'text_domain' ),
             'name_admin_bar' => __( 'Portafolio', 'text_domain' ),
             'archives' => __( 'Portafolio', 'text_domain' ),
             'parent_item_colon' => __( 'Proyecto superior', 'text_domain' ),
             'all_items' => __( 'Todos los proyectos', 'text_domain' ),
             'add_new_item' => __( 'Añadir nuevo proyecto', 'text_domain' ),
             'add_new' => __( 'Añadir nuevo Proyecto', 'text_domain' ),
             'new_item' => __( 'Nuevo proyecto', 'text_domain' ),
             'edit_item' => __( 'Editar proyecto', 'text_domain' ),
             'update_item' => __( 'Actualizar proyecto', 'text_domain' ),
             'view_item' => __( 'Ver proyecto', 'text_domain' ),
             'search_items' => __( 'Buscar proyecto', 'text_domain' ),
             'not_found' => __( 'Not found', 'text_domain' ),
             'not_found_in_trash' => __( 'Not found in Trash', 'text_domain' ),
             'featured_image' => __( 'Imagen destacada', 'text_domain' ),
             'set_featured_image' => __( 'Añadir imagen destacada', 'text_domain' ),
             'remove_featured_image' => __( 'Quitar Imagen destacada', 'text_domain' ),
             'use_featured_image' => __( 'Usar como Imagen destacada', 'text_domain' ),
             'insert_into_item' => __( 'Insert into item', 'text_domain' ),
             'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
             'items_list' => __( 'Items list', 'text_domain' ),
             'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
             'filter_items_list' => __( 'Filter items list', 'text_domain' ),
         );

         $args = array(
             'label' => __( 'Proyecto', 'text_domain' ),
             'description' => __( 'Portafolio', 'text_domain' ),
             'labels' => $labels,
             'supports' => array( 'title', 'editor', 'author', 'thumbnail', ),
             'taxonomies' => array( 'category', 'post_tag' ),
             'hierarchical' => true,
             'public' => true,
             'show_ui' => true,
             'show_in_menu' => true,
             'menu_position' => 5,
             'show_in_admin_bar' => true,
             'show_in_nav_menus' => true,
             'can_export' => true,
             'has_archive' => true,
             'exclude_from_search' => true,
             'publicly_queryable' => true,
             'capability_type' => 'post',
         );
         register_post_type( 'portafolio', $args );

    }
    add_action( 'init', 'custom_post_type_portafolio', 0 );
}


if ( ! function_exists( 'custom_taxonomy_portafolio' ) ) {

// Register Custom Taxonomy
function custom_taxonomy_portafolio() {

    $labels = array(
        'name'                       => _x( 'Tipos de proyectos', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Tipo Proyecto', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Tipos de proyectos', 'text_domain' ),
        'all_items'                  => __( 'Todos los tipos de proyectos', 'text_domain' ),
        'parent_item'                => __( 'Tipo superior', 'text_domain' ),
        'parent_item_colon'          => __( 'Tipo superior:', 'text_domain' ),
        'new_item_name'              => __( 'Nuevo Tipo de proyecto', 'text_domain' ),
        'add_new_item'               => __( 'Añadir Nuevo Tipo de proyecto', 'text_domain' ),
        'edit_item'                  => __( 'Editar Tipo de proyecto', 'text_domain' ),
        'update_item'                => __( 'Actualizar Tipo de proyecto', 'text_domain' ),
        'view_item'                  => __( 'Ver Tipo de proyecto', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separar tipos con comas', 'text_domain' ),
        'add_or_remove_items'        => __( 'Añadir o quitar Nuevo Tipos de proyecto', 'text_domain' ),
        'choose_from_most_used'      => __( 'Elegir entre los más usados', 'text_domain' ),
        'popular_items'              => __( 'Tipos de proyecto populares', 'text_domain' ),
        'search_items'               => __( 'Buscar Tipos de proyecto', 'text_domain' ),
        'not_found'                  => __( 'No se encuentra', 'text_domain' ),
        'no_terms'                   => __( 'No hay Tipos de proyecto', 'text_domain' ),
        'items_list'                 => __( 'Lista de Tipos de proyecto', 'text_domain' ),
        'items_list_navigation'      => __( 'Navegación Tipos de proyecto', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'tipo_proyecto', array( 'portafolio' ), $args );

}
add_action( 'init', 'custom_taxonomy_portafolio', 0 );

}

//widgets

function wpi_init_widgets_neo($id){
    $args = array(
        'name'          => __( 'Footer 1', 'informatico'),
        'id'            => 'footer1',
        'description'   => '',
        'class'         => '',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>'
    );

    register_sidebar( $args );

    register_sidebar(array(
        'name'          => __( 'Footer 2', 'informatico'),
        'id'            => 'footer2',
        'description'   => '',
        'class'         => '',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>'
    ));

    register_sidebar(array(
        'name'          => __( 'Footer 3', 'informatico'),
        'id'            => 'footer3',
        'description'   => '',
        'class'         => '',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>'
    ));
    
}
add_action( 'widgets_init','wpi_init_widgets_neo');


//metaboxes portafolio
add_action('save_post','wpi_meta_box_save');
function wpi_meta_box_save($post_id){
    // Bail if we're doing an auto save  
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
 
    // if our nonce isn't there, or we can't verify it, bail 
    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;
 
    // if our current user can't edit this post, bail  
    if( !current_user_can( 'edit_post' ) ) return;

    // now we can actually save the data  
    $allowed = array(
        'a' => array( // on allow a tags  
            'href' => array() // and those anchors can only have href attribute  
        )
    );

    if(isset($_POST['my_meta_box_siteweb']))
        update_post_meta($post_id,'my_meta_box_siteweb',wp_kses($_POST['my_meta_box_siteweb'],$allowed));

}

function wpi_meta_box_cb($post){
    $values = get_post_custom($post->ID);
    $text = isset($values['my_meta_box_siteweb']) ? esc_attr($values['my_meta_box_siteweb'][0]) : '';
    wp_nonce_field('my_meta_box_nonce','meta_box_nonce');
    ?>
    <label for="my_meta_box_siteweb">SITIO WEB</label>
    <input style="width: 100%;" type="text" placeholder="http://" name="my_meta_box_siteweb" id="my_meta_box_siteweb" value="<?php echo $text; ?>" />
    
    <?php 
}

function wpi_metabox_portafolio(){

    add_meta_box('meta_box_portafolio','Datos Adicionales','wpi_meta_box_cb','portafolio','normal','high');

}


add_action('add_meta_boxes','wpi_metabox_portafolio');


//custom
require get_template_directory().'/inc/customizer.php';