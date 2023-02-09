<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'eventMeta',
        'title' => 'Event Info',
        'style' => '',
        'menu_order' => 1,
        'position' => 'acf_after_title',
        'fields' => [
            [
                'label' => __('Date', 'flynt'),
                'name' => 'eventDate',
                'type' => 'date_picker',
                'first_day' => 1,
                'wrapper' => [
                    'width' => '50',
                ],
                'display_format' => 'd.m.Y',
                'return_format' => 'd.m.Y'
            ],
            [
                'label' => __('Time', 'flynt'),
                'name' => 'eventTime',
                'type' => 'time_picker',
                'wrapper' => [
                    'width' => '50',
                ],
                'display_format' => 'g:i A',
                'return_format' => 'g:i A'
            ],
            [
                'label' => __('Intro', 'flynt'),
                'name' => 'eventIntro',
                'type' => 'wysiwyg',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
                'wrapper' => [
                    'width' => '100',
                ]
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'event',
                ],
            ],
        ],
    ]);
    ACFComposer::registerFieldGroup([
        'name' => 'eventComponents',
        'title' => __('Event Components', 'flynt'),
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'eventComponents',
                'label' => __('Event Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\BlockWysiwyg\getACFLayout()
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'event',
                ],
            ],
        ],
    ]);
});
