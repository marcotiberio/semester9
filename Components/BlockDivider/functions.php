<?php

namespace Flynt\Components\BlockDivider;

use Flynt\FieldVariables;

add_filter('Flynt/addComponentData?name=BlockDivider', function ($data) {
    $data['status'] = $data['percentageDistance'] >= 101 ? 'expand' : 'collapse';
    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'BlockDivider',
        'label' => __('Block: Divider', 'flynt'),
        'sub_fields' => [
            [
                'label' => __('Divider', 'flynt'),
                'name' => '',
                'type' => 'message',
                'message' => 'Add this component to display an horizontal black border',
                'new_lines' => 'wpautop',
                'esc_html' => 1,
                'wrapper' =>  [
                    'width' => '100',
                ],
            ],
        ]
    ];
}
