<?php 


function pd_produtos_scripts(){
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/bootstrap.min.js', array( 'jquery' ), '4.4.1', true );



		wp_enqueue_script('menu-js', get_template_directory_uri() . '/js/menu.js', array('jquery'), filemtime(get_template_directory() . '/js/menu.js'), true);
        wp_enqueue_script( 'timeline-js', get_template_directory_uri() . '/js/timeline.js', array( 'jquery' ), '4.4.1', true );


	


	
	wp_enqueue_script( 'jquery2','https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
	wp_enqueue_script( 'boot-js','https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js');
	wp_enqueue_script( 'slick-carousel','http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
	wp_enqueue_script( 'fancybox-js','https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js');
		// wp_enqueue_script( 'pointer-js','/wp-content/themes/Arqosv2/js/pointer.js');

	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/bootstrap.min.css', array(), '4.4.1', 'all' );
    wp_enqueue_style( 'timeline-css', get_template_directory_uri() . '/css/timeline.css', array(), '1.0', 'all' );

	wp_enqueue_style( 'galeria-css', get_template_directory_uri() . '/css/galeria.css', array(), '4.4.1', 'all' );



wp_enqueue_style('730-style-sass', get_template_directory_uri() . '/sass/style.css', array(), filemtime(get_template_directory() . '/sass/style.css'), false);



 	wp_enqueue_script( 'font-js','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js');
 	
 	wp_enqueue_style( 'slick-css','http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
 	// wp_enqueue_style( 'pointer-css','/wp-content/themes/Arqosv2/sass/pointer.css');
 	wp_enqueue_style( 'fancy-box-css','https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css');
 	wp_enqueue_style( 'fontawesome','https://use.fontawesome.com/releases/v5.14.0/css/all.css');
 	


 	// Google Fonts
 	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700');
 	


}
add_action( 'wp_enqueue_scripts', 'pd_produtos_scripts' );

add_theme_support('title-tag');



function create_posttype() {
    register_post_type( 'midia',
        array(
            'labels' => array(
                'name' => __( 'Falcon na Mídia' ),
                'singular_name' => __( 'Falcon na Mídia' ),
				'menu_name' => _x('Materias', 'admin menu'),
				'name_admin_bar' => _x('Materias', 'admin bar'),
				'add_new' => _x('Adicionar Materia', 'add new'),
				'add_new_item' => __('Adicionar Nova'),
				'new_item' => __('Nova Materia'),
				'edit_item' => __('Editar Materia'),
				'view_item' => __('Ver Materia'),
				'all_items' => __('Todas as Materias'),
				'search_items' => __('Procurar Materias'),
				'not_found' => __('Nenhuma materia encontrada'),                
            ),
            'public' => true,
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-media-document',
            'has_archive' => true,
            'rewrite' => array('slug' => 'materia'),
            'show_in_rest' => false,


        )
    );
}
// ADDED PRIORITY
add_action( 'init', 'create_posttype', 9 );



function create_posttype_curso() {
    register_post_type( 'cursos',
        array(
            'labels' => array(
                'name' => __( 'Cursos' ),
                'singular_name' => __( 'Curso' ),
				'menu_name' => _x('Cursos', 'admin menu'),
				'name_admin_bar' => _x('Cursos', 'admin bar'),
				'add_new' => _x('Adicionar Curso', 'add new'),
				'add_new_item' => __('Adicionar Novo'),
				'new_item' => __('Novo Curso'),
				'edit_item' => __('Editar Curso'),
				'view_item' => __('Ver Curso'),
				'all_items' => __('Todos os Cursos'),
				'search_items' => __('Procurar Cursos'),
				'not_found' => __('Nenhuma curso encontrado'),                
            ),
            'public' => true,
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-book',
            'has_archive' => true,
            'rewrite' => array('slug' => 'curso'),
            'taxonomies'  => array( 'curso-categoria'),
            'show_in_rest' => false,

        )
    );
}
// ADDED PRIORITY
add_action( 'init', 'create_posttype_curso', 8 );

//Create category for specific post type
function tr_create_my_taxonomy2() {
    register_taxonomy(
        'curso-categoria',
        'cursos',
        array(
            'label' => __( 'Categoria' ),
            // CHANGED SLUG
            'rewrite' => array( 'slug' => 'cursos/categoria' ),
            'hierarchical' => true,
            'has_archive' => true,
  		
      
       
        'show_admin_column'          => true,
       
               

        )
    );
}
// ADDED PRIORITY
add_action( 'init', 'tr_create_my_taxonomy2', 7 );



add_theme_support( 'post-thumbnails' );





function create_posttype_unidades() {
    register_post_type( 'unidades',
        array(
            'labels' => array(
                'name' => __( 'Unidades' ),
                'singular_name' => __( 'Unidades' ),
				'menu_name' => _x('Unidades', 'admin menu'),
				'name_admin_bar' => _x('Unidades', 'admin bar'),
				'add_new' => _x('Adicionar Unidade', 'add new'),
				'add_new_item' => __('Adicionar Nova'),
				'new_item' => __('Nova Unidade'),
				'edit_item' => __('Editar Unidade'),
				'view_item' => __('Ver Unidade'),
				'all_items' => __('Todas as Unidades'),
				'search_items' => __('Procurar Unidades'),
				'not_found' => __('Nenhuma Unidade encontrada'),                
            ),
            'public' => true,
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-admin-home',
            'has_archive' => true,
            'taxonomies'  => array( 'unidades-categoria'),
            'rewrite' => array('slug' => 'unidade'),
       


        )
    );
}
// ADDED PRIORITY
add_action( 'init', 'create_posttype_unidades', 9 );


function tr_create_my_taxonomy_unidade() {
    register_taxonomy(
        'unidade-categoria',
        'unidades',
        array(
            'label' => __( 'Categoria' ),
            // CHANGED SLUG
            'rewrite' => array( 'slug' => 'unidade/categoria' ),
            'hierarchical' => true,
            'has_archive' => true,
  		
      
       
        'show_admin_column'          => true,
       
               

        )
    );
}
// ADDED PRIORITY
add_action( 'init', 'tr_create_my_taxonomy_unidade', 7 );


