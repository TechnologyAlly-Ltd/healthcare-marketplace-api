<?php

use TA\HealthcareMarketplaceAPI\HealthcareMarketplaceAPI;

require_once 'vendor/autoload.php';

$healthcare = new HealthcareMarketplaceAPI('d687412e7b53146b2631dc01974ad0a4');
echo '<pre>';
var_dump($healthcare->Coverage()->searchProviders([
    'zipcode' => 19123,
    'q' => 'hospital'
]));