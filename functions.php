<?php
    add_action( 'wp_enqueue_scripts', function() {
        wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css' );  
        wp_enqueue_script( 'index', get_template_directory_uri() . '/assets/js/index.js', array(), 'null', true );
    });

    add_theme_support('post-thumbnails'); // подключение картинок 
    add_theme_support('title-tag'); // управление тайтлом

    add_action( 'after_setup_theme', 'crb_load' );
    function crb_load() {
        require_once('includes/carbon-fields/vendor/autoload.php' );
        \Carbon_Fields\Carbon_Fields::boot();
    }

    add_action( 'carbon_fields_register_fields',function() {
        require_once('includes/carbon-fields-options/theme-options.php');
        require_once('includes/carbon-fields-options/post-meta.php');
    });  

    add_action( 'init', 'register_post_types' );
    function register_post_types() {
        register_post_type('concerts', [
            'labels' => [
            'name'                      => 'Концерты', // основное название для типа записи
            'singular_name'        => 'Концерт', // название для одной записи этого типа
            'add_new'                 => 'Новый концерт', // для добавления новой записи
            'add_new_item'         => 'Информация о концерте', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'                 => 'Редактирование информации', // для редактирования типа записи
            'new_item'                 => 'Новый Концерт', // текст новой записи
            'view_item'                => 'Смотреть Концерт', // для просмотра записи этого типа.
            'search_items'           => 'Искать Концерт', // для поиска по этим типам записи
            'not_found'               => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'menu_name'            => 'Концерты', // название меню
            ],
            'menu_icon'       => 'dashicons-microphone',
            'public'               => true,
            'menu_position' => 5,
            'supports'           => ['title', 'editor', 'thumbnail', 'excerpt'],
            'has_archive'       => true,
            'rewrite'              => ['slug' => 'concerts']
        ]);

        // register_taxonomy('product-categories', 'product', [
        //     'labels' => [
        //     'name'                                       => 'Категории товаров',
        //     'singular_name'                         => 'Категория товароа',
        //     'search_items'                            => 'Искать категории',
        //     'popular_items'                          => 'Популярные категории',
        //     'all_items'                                   => 'Все категории',
        //     'edit_item'                                  => 'Изменить категорию',
        //     'update_item'                             => 'Обновить категорию',
        //     'add_new_item'                          => 'Добавить новую категорию',
        //     'new_item_name'                       => 'Новое название категории',
        //     'separate_items_with_commas'  => 'Отделить категории запятыми',
        //     'add_or_remove_items'               => 'Добавить или удалить категорию',
        //     'choose_from_most_used'          => 'Выбрать самую популярную категорию',
        //     'menu_name'                              => 'Категории',
        //     ],
        //     'hierarchical'  => true,
        // ]);
    }