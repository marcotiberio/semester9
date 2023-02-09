<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'artistMeta',
        'title' => 'Artist Info',
        'style' => '',
        'menu_order' => 1,
        'position' => 'acf_after_title',
        'fields' => [
            [
                'label' => __('Portrait', 'flynt'),
                'name' => 'artistPic',
                'type' => 'image',
                'preview_size' => 'medium',
                'instructions' => __('Image-Format: JPG, PNG.', 'flynt'),
                'mime_types' => 'jpg,jpeg,png',
                'wrapper' => [
                    'width' => 50
                ],
            ],
            [
                'label' => __('Bio', 'flynt'),
                'name' => 'artistBio',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
                'wrapper' => [
                    'width' => 50,
                ]
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ],
            ],
        ],
    ]);
    ACFComposer::registerFieldGroup([
        'name' => 'postComponents',
        'title' => __('Post Components', 'flynt'),
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'postComponents',
                'label' => __('Post Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\AccordionDefault\getACFLayout(),
                    Components\BlockAnchor\getACFLayout(),
                    Components\BlockCollapse\getACFLayout(),
                    Components\BlockDivider\getACFLayout(),
                    Components\BlockDownloads\getACFLayout(),
                    Components\BlockGallery\getACFLayout(),
                    Components\BlockImage\getACFLayout(),
                    Components\BlockImageText\getACFLayout(),
                    Components\BlockVideoOembed\getACFLayout(),
                    Components\BlockWysiwyg\getACFLayout(),
                    Components\SliderImages\getACFLayout(),
                    Components\ReusableComponent\getACFLayout(),
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ],
            ],
        ],
    ]);
});
