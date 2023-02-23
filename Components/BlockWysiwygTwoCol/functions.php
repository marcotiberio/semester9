<?php

namespace Flynt\Components\BlockWysiwygTwoCol;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockWysiwygTwoCol',
        'label' => 'Block: Contact Forms',
        'sub_fields' => [
            [
                'label' => __('Left Column', 'flynt'),
                'name' => 'contentLeftTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Left Column', 'flynt'),
                'name' => 'contentHtmlLeft',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
            ],
            [
                'label' => __('Right Column', 'flynt'),
                'name' => 'contentRightTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Right Column', 'flynt'),
                'name' => 'contentHtmlRight',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
            ]
        ]
    ];
}
