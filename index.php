<?php

use TA\HealthcareMarketplaceAPI\HealthcareMarketplaceAPI;

require_once 'vendor/autoload.php';

$healthcare = new HealthcareMarketplaceAPI('d687412e7b53146b2631dc01974ad0a4');
var_dump($healthcare->Drugs()->coveredDrugs([
    'drugs' => '1049589',
    'planids' => '11512NC0100031',
]));