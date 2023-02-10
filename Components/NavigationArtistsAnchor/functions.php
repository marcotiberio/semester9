<?php

namespace Flynt\Components\NavigationArtistsAnchor;

use Flynt\Utils\Asset;
use Flynt\Utils\Options;
use Timber\Timber;

add_action('init', function () {
    register_nav_menus([
        'navigation_artists_anchor' => __('Navigation Artists Anchor', 'flynt')
    ]);
});

add_filter('Flynt/addComponentData?name=NavigationArtistsAnchor', function ($data) {
    $data['menu'] = Timber::get_menu('navigation_artists_anchor') ?? Timber::get_pages_menu();

    return $data;
});

Options::addTranslatable('NavigationArtistsAnchor', [
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
