<?php

namespace Flynt\Components\BlockDownloads;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockDownloads',
        'label' => 'Block: Downloads',
        'sub_fields' => [
            [
                'label' => __('Title', 'flynt'),
                'name' => 'preContent',
                'type' => 'text'
            ],
            [
                'label' => __('Downloads', 'flynt'),
                'name' => 'repeaterDownloads',
                'type' => 'repeater',
                'layout' => 'block',
                'button_label' => __('Add File', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('File', 'flynt'),
                        'name' => 'file',
                        'type' => 'file',
                        'return_format' => 'array',
                        'wrapper' => [
                            'width' => 100
                        ],
                    ],
                ]
            ],
        ],
    ];
}
