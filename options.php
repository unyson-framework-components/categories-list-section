<?php if (!defined('FW')) die('Forbidden');

$categories = get_categories();
$choices = array();

foreach ($categories as $key => $category) {
    $choices[$category->name] = $category->name;
}

$options = array(
    'section_title' => array(
        'type' => 'text',
        'value' => '',
        'label' => 'Section title',
        'desc' => 'Add Section title if you want to display it on your page',
    ),

    'section_subtitle' => array(
        'type' => 'text',
        'value' => '',
        'label' => 'Section Subtitle',
        'desc' => 'Add Section subtitle if you want to display it on your page',
    ),

    'singe_category' => array(
        'type' => 'addable-popup',
        'label' => __('Add Category', 'galg'),
        'desc'  => __('Chose the categories you want to display on the page', 'galg'),
        'template' => '{{=category_choose}}',
        'popup-title' => null,
        'size' => 'small',
        'add-button-text' => __('Add Category', 'galg'),
        'popup-options' => array(
            'category_choose' => array(
                'type'  => 'select',
                'label' => __('Category', 'galg'),
                'desc' => __('Choose category from the list', 'galg'),
                'choices' => $choices,
            )
        ),
    )
);