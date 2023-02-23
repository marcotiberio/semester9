<?php

namespace Flynt\Components\BlockEventDescription;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockEventDescription',
        'label' => __('Block: Event Description', 'flynt'),
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 1,
            ],
            [
                'label' => __('RSVP', 'flynt'),
                'name' => 'rsvpTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Links', 'flynt'),
                'name' => 'repeaterLinks',
                'type' => 'repeater',
                'layout' => 'block',
                'button_label' => __('Add Link', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('File', 'flynt'),
                        'name' => 'rsvpLink',
                        'type' => 'link',
                        'return_format' => 'array',
                        'wrapper' => [
                            'width' => 100
                        ],
                    ],
                ]
            ]
        ]
    ];
}
