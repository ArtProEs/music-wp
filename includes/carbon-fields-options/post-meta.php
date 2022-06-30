<?php

if(!defined('ABSPATH')) { 
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', 'Дополнительные поля' )
    ->show_on_page(12)
    ->add_tab( 'Первый Экран', [
        Field::make( 'text', 'top_title', 'Заголовок'),
    ])

    ->add_tab( 'Новости', [
        Field::make( 'complex', 'news_items', 'Добавить новость')
            ->set_max( 3 )
            ->add_fields([
                Field::make( 'image', 'item_img', 'Картинка'),
                Field::make( 'text', 'item_text', 'Текст'),
            ])
        ,
    ])

    ->add_tab( 'О нас', [
        Field::make( 'image', 'adout_img', 'Картинка'),
        Field::make( 'text', 'adout_title', 'Заголовок'),
        Field::make( 'textarea', 'adout_text', 'Текст'),
        Field::make( 'text', 'adout_performance1', 'Характеристики')->set_width(25),
        Field::make( 'text', 'adout_performance2', 'Характеристики')->set_width(25),
        Field::make( 'text', 'adout_performance3', 'Характеристики')->set_width(25),
        Field::make( 'text', 'adout_performance4', 'Характеристики')->set_width(25),
    ])

    ->add_tab( 'Цитата', [
        Field::make( 'textarea', 'quote_text', 'Цитата'),
        Field::make( 'image', 'quote_img', 'Картинка'),
    ])

    ->add_tab( 'Хиты', [
        Field::make( 'text', 'tracks_title', 'Заголовок'),
        Field::make( 'image', 'tracks_img', 'Картинка'),

        Field::make( 'separator', 'tracks_links', 'Follow me:' )->set_help_text('Установите ссыдки Spotify iTunes'),
        Field::make( 'text', 'tracks_link-spotify', 'Spotify'),
        Field::make( 'text', 'tracks_link-itunes', 'iTunes'),
        ])

    ->add_tab( 'Концерты', [
        Field::make( 'association', 'concerts', 'Товары' )
            ->set_types([
                [
                    'type'          => 'post',
                    'post_type' => 'concerts',
                ]
            ])
    ]);

Container::make( 'post_meta', 'Дата концерта' )
->show_on_post_type('concerts')
->add_tab( 'Дата', [
    Field::make( 'text', 'concert_date', 'Дата'),
]);