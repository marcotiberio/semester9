<?php

namespace Flynt\Components\ColumnsWysiwyg;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'ColumnsWysiwyg',
        'label' => 'Columns: Text',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Title', 'flynt'),
                'name' => 'preContent',
                'type' => 'text'
            ],
            [
                'label' => __('Text Columns', 'flynt'),
                'name' => 'columnTexts',
                'type' => 'repeater',
                'layout' => 'row',
                'min' => 1,
                'button_label' => __('Add Text Column', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Column', 'flynt'),
                        'name' => 'columnText',
                        'type' => 'wysiwyg',
                        'tabs' => 'visual',
                        'media_upload' => 0,
                        'delay' => 1,
                    ],
                ],
            ],
        ],
    ];
}
