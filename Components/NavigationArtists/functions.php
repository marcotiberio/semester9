<?php

namespace Flynt\Components\NavigationArtists;

use Flynt\Utils\Asset;
use Flynt\Utils\Options;
use Timber\Timber;

add_action('init', function () {
    register_nav_menus([
        'navigation_artists' => __('Navigation Artists', 'flynt')
    ]);
});

add_filter('Flynt/addComponentData?name=NavigationArtists', function ($data) {
    $data['menu'] = Timber::get_menu('navigation_artists') ?? Timber::get_pages_menu();

    return $data;
});

Options::addTranslatable('NavigationArtists', [
    [
        'label' => __('Labels', 'flynt'),
        'name' => 'labelsTab',
        'type' => 'tab',
        'placement' => 'top',
        'endpoint' => 0
    ],
    [
        'label' => '',
        'name' => 'labels',
        'type' => 'group',
        'sub_fields' => [
            [
                'label' => __('Aria Label', 'flynt'),
                'name' => 'ariaLabel',
                'type' => 'text',
                'default_value' => __('Main', 'flynt'),
                'required' => 1,
                'wrapper' => [
                    'width' => '50',
                ],
            ],
        ],
    ],
]);
