<?php

use TA\HealthcareMarketplaceAPI\HealthcareMarketplaceAPI;

require_once 'vendor/autoload.php';

$healthcare = new HealthcareMarketplaceAPI('d687412e7b53146b2631dc01974ad0a4');
var_dump($healthcare->Households()->getLowestCostBronzePlan([
    // 'state' => 'VA',
    'year' => 2019,
    // 'income' => 40000,
],[
    'place' => [
        'countyfips' => '51107',
        'state' => 'VA',
        'zipcode' => '20103',
    ],
    'household' => [
        'income' => 74897358.7612083,
        'people' => [
            [
                'age' => 12,
                'uses_tobacco' => false,
            ],
            [
                'age' => 23,
                'uses_tobacco' => false,
            ]
        ]
    ],
    'year' => 2022
]));