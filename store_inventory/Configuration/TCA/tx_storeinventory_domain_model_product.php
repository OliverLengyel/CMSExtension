<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:store_inventory/Resources/Private/Language/locallang_db.xlf:tx_storeinventory_domain_model_product',
        'label' => 'Product',
        'iconfile' => 'EXT:store_inventory/Resources/Public/Icons/Product.svg'
    ],
    'columns' => [
        'name' => [
            'label' => 'LLL:EXT:store_inventory/Resources/Private/Language/locallang_db.xlf:tx_storeinventory_domain_model_product.item_label',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim'
            ]
        ],
        'description' => [
            'label' => 'LLL:EXT:store_inventory/Resources/Private/Language/locallang_db.xlf:tx_storeinventory_domain_model_product.item_description',
            'config' => [
                'type' => 'text',
                'eval' => 'trim'
            ]
        ],
        'quantity' => [
            'label' => 'LLL:EXT:store_inventory/Resources/Private/Language/locallang_db.xlf:tx_storeinventory_domain_model_product.stock_quantity',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ]
        ],
        'bewertungen' => [
            'exclude' => true,
            'lable' => 'LLL:EXT:store_inventory/Resources/Private/Language/locallang_db.xlf:tx_storeinventory_domain_model_product.bewertungen',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_storeinventory_domain_model_bewertung',
                'foreign_field' => 'product',
                'maxitems' => 9999
            ]
        ]
    ],
    'types' => [
        '0' => ['showitem' => 'name, description, quantity, bewertungen']
    ]
];
