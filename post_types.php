<?PHP

// POST TYPES
add_action('init', 'news_post_type');
add_action('init', 'service_post_type');

function news_tags_taxonomy() {
    $labels = array(
        'name'                       => 'Категории новостей',
        'singular_name'              => 'Категория новостей',
        'menu_name'                  => 'Категории новостей'
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => false,
        'rewrite'                    => false,
    );
    register_taxonomy( 'news_tag', null, $args );
}

add_action( 'init', 'news_tags_taxonomy', 0 );

function news_post_type(){
    register_post_type('news', array(
        'label'  => null,
        'labels' => array(
            'name'                  => ('Блог'),
            'singular_name'         => 'Блог',
            'add_new'               => 'Добавить новость',
            'add_new_item'          => 'Добавить новость',
            'menu_name'             => 'Блог',
            'name_admin_bar'        => ('Новость')
        ),
        'description'        => '',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-format-aside',
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'taxonomies'            => array( 'news_tag'),
        'supports'           => array('title', 'excerpt', 'editor', 'thumbnail')
    ) );
}

function project_tags_taxonomy() {
    $labels = array(
        'name'                       => '',
        'singular_name'              => 'Галерея фото/видео',
        'menu_name'                  => ''
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => false,
        'rewrite'                    => false,
    );
    register_taxonomy( 'card_tag', null, $args );
}

add_action( 'init', 'project_tags_taxonomy', 0 );

function service_post_type(){
    register_post_type('card', array(
        'label'  => null,
        'labels' => array(
            'name'               => ('Карточка фото/видео'),
            'singular_name'      => 'Галереи фото/видео',
            'add_new'            => 'Добавить галерею фото/видео',
            'add_new_item'       => 'Добавить галерею фото/видео',
            'menu_name'          => 'Галереи фото/видео',
            'name_admin_bar'     => ('Фото/видео')
        ),
        'description'         => '',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-admin-generic',
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'taxonomies'            => array( 'card_tag'),
        'supports'           => array('title', 'editor', 'thumbnail')
    ) );
}

?>