<?php

if(!defined('ABSPATH')) { 
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make( 'theme_options', 'Настройки Сайта' )
    ->add_tab( 'Общие',[
        Field::make( 'separator', 'site', 'Изображения сайта' )->set_help_text('Установите картинки для Логотипа и Заднего фона '),
        Field::make( 'image', 'site_logo', 'Логотип' )->set_width(30),
        Field::make( 'image', 'site_bg_img', 'Картинка Заднего фона' )->set_width(30),
        Field::make( 'image', 'site_title_img', 'Картинка перед Загаловками' )->set_width(30),

        Field::make( 'separator', 'site_img-burger', 'Картинки бургер кнопок' )->set_help_text('Установите картинки кнопок бургер меню'),
        Field::make( 'image', 'site_burger', 'Открыть бургер меню' )->set_width(50),
        Field::make( 'image', 'site_burger-closes', 'Закрыть бургер меню' )->set_width(50),

        Field::make( 'separator', 'site_img-player', 'Картинки для плеера' )->set_help_text('Установите картинки кнопок Плеера'),
        Field::make( 'image', 'site_player-play', 'Плей' )->set_width(50),
        Field::make( 'image', 'site_player-paus', 'Пауза' )->set_width(50),

        Field::make( 'separator', 'img_link', 'Картинки для ссылок' )->set_help_text('Установите картинки для ссылок'),
        Field::make( 'image', 'img_link-itunes', 'itunes' )->set_width(30),
        Field::make( 'image', 'img_link-spotify', 'spotify' )->set_width(30),
        Field::make( 'image', 'img_link-instagram', 'instagram' )->set_width(30),
        Field::make( 'image', 'img_link-youtube', 'youtube' )->set_width(30),
        Field::make( 'image', 'img_link-twitter', 'twitter' )->set_width(30),
        Field::make( 'image', 'img_link-facebook', 'facebook' )->set_width(30),

        Field::make( 'separator', 'gallery', 'Картинки для галереи' )->set_help_text('Установите 5 картинок для галереи'),
        Field::make( 'image', 'gallery-grid1', 'grid1' )->set_width(50),
        Field::make( 'image', 'gallery-grid2', 'grid2' )->set_width(50),
        Field::make( 'image', 'gallery-grid3', 'grid3' )->set_width(30),
        Field::make( 'image', 'gallery-grid4', 'grid4' )->set_width(30),
        Field::make( 'image', 'gallery-grid5', 'grid5' )->set_width(30),

        Field::make( 'separator', 'manager', 'Заполните данные менеджера' )->set_help_text('Установите картинки кнопок Плеера'),
        Field::make( 'text', 'manager_name', 'ARTIST MANAGEMENT' )->set_required(true)->set_width(50),
        Field::make( 'text', 'manager_link', 'Ссылка на личную строницу менеджера' )->set_required(true)->set_width(50),
        Field::make( 'text', 'manager_email', 'EMAIL' )->set_required(true),
    ])  

    ->add_tab( 'Музыка', [
        Field::make( 'separator', 'media', 'Медиа Файлы' )->set_help_text('Загрузите Музыкальные компазиции, введите Автора и название в соответствии с компазицией'),
        Field::make( 'complex', 'medias', 'Музыка')->set_max( 6 )
        ->add_fields([
            Field::make( 'text', 'author', 'Автор' )->set_required(true),
            Field::make( 'text', 'name', 'название' )->set_required(true),
            Field::make( 'file', 'src', 'Музыка' )->set_type( 'audio' )->set_value_type( 'url' )->set_required(true)
        ]),
    ])
; 
