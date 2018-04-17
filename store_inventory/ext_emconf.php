<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Store Inventory',
    'description' => 'An extension to manage a stock.',
    'category' => 'plugin',
    'author' => 'Oliver Lengyel',
    'author_company' => 'Widermann GMBH',
    'author_email' => 'oliver.lengyel@me.com',
    'state' => 'alpha',
    'clearCacheOnLoad' => true,
    'version' => '0.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.9.99',
        ]
    ],
    'autoload' => [
        'psr-4' => [
            'MyVendor\\StoreInventory\\' => 'Classes'
        ]
    ],
];
