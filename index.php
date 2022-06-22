<?php

use TA\HealthcareMarketplaceAPI\HealthcareMarketplaceAPI;

require_once 'vendor/autoload.php';

$healthcare = new HealthcareMarketplaceAPI('DtfaAPvue3jbAm4uvchtiqBpmJnQ2TFW');
var_dump($healthcare->Config()->getBaseURL());