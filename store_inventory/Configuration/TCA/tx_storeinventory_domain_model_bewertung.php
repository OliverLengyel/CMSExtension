<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:store_inventory/Resources/Private/Language/locallang_db.xlf:tx_storeinventory_domain_model_bewertung',
        'label' => 'Bewertung',
        'iconfile' => 'EXT:store_inventory/Resources/Public/Icons/Product.svg'
    ],
    'columns' => [
        'autor' => [
            'label' => 'LLL:EXT:store_inventory/Resources/Private/Language/locallang_db.xlf:tx_storeinventory_domain_model_bewertung.item_label',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim'
            ]
        ],
        'description' => [
            'label' => 'LLL:EXT:store_inventory/Resources/Private/Language/locallang_db.xlf:tx_storeinventory_domain_model_bewertung.item_description',
            'config' => [
                'type' => 'text',
                'eval' => 'trim'
            ]
        ],
    ],
    'types' => [
        '0' => ['showitem' => 'autor, description']
    ]
];
