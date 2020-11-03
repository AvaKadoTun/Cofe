<?php
if( function_exists('acf_add_local_field_group') ):
acf_add_local_field_group(array(
'key' => 'nastrojka-stranicy',
'title' => 'Настройка страницы',
'menu_order' => 0,
'location' => array(
  array(
    array(
      'param' => 'post_template',
      'operator' => '==',
      'value' => 'index.php',
    ),
  ),
),
'hide_on_screen' => array(
  0 => 'the_content',
),
'fields' => array (
  0 => 
  array (
    'label' => 'Слайдер',
    'name' => 'slajder',
    'key' => 'field_slajder',
    'type' => 'group',
    'layout' => 'row',
    'sub_fields' => 
    array (
      0 => 
      array (
        'label' => 'Слайдеры',
        'name' => 'slajdery',
        'key' => 'field_slajder_slajdery',
        'type' => 'repeater',
        'layout' => 'row',
        'sub_fields' => 
        array (
          0 => 
          array (
            'label' => 'Фото',
            'name' => 'foto',
            'key' => 'field_slajder_slajdery_foto',
            'type' => 'image',
            'return_format' => 'url',
          ),
          1 => 
          array (
            'label' => 'Заголовок',
            'name' => 'zagolovok',
            'key' => 'field_slajder_slajdery_zagolovok',
            'type' => 'text',
          ),
          2 => 
          array (
            'label' => 'Описание',
            'name' => 'opisanie',
            'key' => 'field_slajder_slajdery_opisanie',
            'type' => 'textarea',
            'new_lines' => 'br',
          ),
        ),
      ),
    ),
  ),
  1 => 
  array (
    'label' => 'Заголовок',
    'name' => 'zagolovok',
    'key' => 'field_zagolovok',
    'type' => 'text',
  ),
  2 => 
  array (
    'label' => 'Описание',
    'name' => 'opisanie',
    'key' => 'field_opisanie',
    'type' => 'textarea',
    'new_lines' => 'br',
  ),
  3 => 
  array (
    'label' => 'Предложение',
    'name' => 'predlozhenie',
    'key' => 'field_predlozhenie',
    'type' => 'group',
    'layout' => 'row',
    'sub_fields' => 
    array (
      0 => 
      array (
        'label' => 'Иконка1',
        'name' => 'ikonka1',
        'key' => 'field_predlozhenie_ikonka1',
        'type' => 'image',
        'return_format' => 'url',
      ),
      1 => 
      array (
        'label' => 'Заголовок1',
        'name' => 'zagolovok1',
        'key' => 'field_predlozhenie_zagolovok1',
        'type' => 'text',
      ),
      2 => 
      array (
        'label' => 'Описание1',
        'name' => 'opisanie1',
        'key' => 'field_predlozhenie_opisanie1',
        'type' => 'textarea',
        'new_lines' => 'br',
      ),
      3 => 
      array (
        'label' => 'Иконка2',
        'name' => 'ikonka2',
        'key' => 'field_predlozhenie_ikonka2',
        'type' => 'image',
        'return_format' => 'url',
      ),
      4 => 
      array (
        'label' => 'Заголовок2',
        'name' => 'zagolovok2',
        'key' => 'field_predlozhenie_zagolovok2',
        'type' => 'text',
      ),
      5 => 
      array (
        'label' => 'Описание2',
        'name' => 'opisanie2',
        'key' => 'field_predlozhenie_opisanie2',
        'type' => 'textarea',
        'new_lines' => 'br',
      ),
      6 => 
      array (
        'label' => 'Иконка3',
        'name' => 'ikonka3',
        'key' => 'field_predlozhenie_ikonka3',
        'type' => 'image',
        'return_format' => 'url',
      ),
      7 => 
      array (
        'label' => 'Заголовок3',
        'name' => 'zagolovok3',
        'key' => 'field_predlozhenie_zagolovok3',
        'type' => 'text',
      ),
      8 => 
      array (
        'label' => 'Описание3',
        'name' => 'opisanie3',
        'key' => 'field_predlozhenie_opisanie3',
        'type' => 'textarea',
        'new_lines' => 'br',
      ),
      9 => 
      array (
        'label' => 'Иконка4',
        'name' => 'ikonka4',
        'key' => 'field_predlozhenie_ikonka4',
        'type' => 'image',
        'return_format' => 'url',
      ),
      10 => 
      array (
        'label' => 'Заголовок4',
        'name' => 'zagolovok4',
        'key' => 'field_predlozhenie_zagolovok4',
        'type' => 'text',
      ),
      11 => 
      array (
        'label' => 'Описание4',
        'name' => 'opisanie4',
        'key' => 'field_predlozhenie_opisanie4',
        'type' => 'textarea',
        'new_lines' => 'br',
      ),
    ),
  ),
  4 => 
  array (
    'label' => 'Блог',
    'name' => 'blog',
    'key' => 'field_blog',
    'type' => 'group',
    'layout' => 'row',
    'sub_fields' => 
    array (
      0 => 
      array (
        'label' => 'Заголовок',
        'name' => 'zagolovok',
        'key' => 'field_blog_zagolovok',
        'type' => 'text',
      ),
      1 => 
      array (
        'label' => 'Описание',
        'name' => 'opisanie',
        'key' => 'field_blog_opisanie',
        'type' => 'textarea',
        'new_lines' => 'br',
      ),
    ),
  ),
),
));
endif;
?>