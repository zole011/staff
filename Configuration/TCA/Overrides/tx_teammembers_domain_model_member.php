<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:staff/Resources/Private/Language/locallang_db.xlf:tx_staff_domain_model_member',
        'label' => 'last_name',
        'label_alt' => 'first_name',
        'label_alt_force' => true,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'first_name,last_name,title,position,description',
        'iconfile' => 'EXT:staff/Resources/Public/Icons/user_plugin_staff.svg',
        'slug' => [
            'field' => 'slug',
            'generatorOptions' => [
                'fields' => ['first_name', 'last_name'],
                'prefixParentPageSlug' => true,
                'fallbackCharacter' => '-',
                'replacements' => [],
            ],
            'default' => '',
        ],
    ],
    'types' => [
        '1' => ['showitem' => '
            first_name, last_name, title, position, image, description, slug,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            hidden, starttime, endtime
        '],
    ],
    'columns' => [
        'first_name' => [
            'label' => 'First Name',
            'config' => [
                'type' => 'input',
                'eval' => 'trim,required',
            ],
        ],
        'last_name' => [
            'label' => 'Last Name',
            'config' => [
                'type' => 'input',
                'eval' => 'trim,required',
            ],
        ],
        'title' => [
            'label' => 'Title',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
            ],
        ],
        'position' => [
            'label' => 'Position',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['Director', 'director'],
                    ['Deputy Director', 'deputy'],
                    ['Head of Department', 'head'],
                    ['Staff', 'staff'],
                ],
                'eval' => '',
                'default' => 'staff',
            ],
        ],
        'description' => [
            'label' => 'Description',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
            ],
        ],
        'image' => [
            'label' => 'Image',
            'config' => [
                'type' => 'file',
                'appearance' => [
                    'createNewRelationLinkTitle' => 'Add Image',
                ],
                'maxitems' => 1,
                'allowed' => 'jpg,jpeg,png,svg',
            ],
        ],
        'slug' => [
            'label' => 'Slug',
            'config' => [
                'type' => 'slug',
                'generatorOptions' => [
                    'fields' => ['first_name', 'last_name'],
                    'fallbackCharacter' => '-',
                    'prefixParentPageSlug' => true,
                ],
                'eval' => 'uniqueInSite',
                'default' => '',
            ],
        ],
        'hidden' => [
            'label' => 'Hidden',
            'config' => [
                'type' => 'check',
            ],
        ],
        'starttime' => [
            'label' => 'Start time',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime',
            ],
        ],
        'endtime' => [
            'label' => 'End time',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime',
            ],
        ],
    ],
];
