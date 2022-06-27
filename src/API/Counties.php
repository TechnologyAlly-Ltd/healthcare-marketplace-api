<?php

namespace TA\HealthcareMarketplaceAPI\API;

use TA\HealthcareMarketplaceAPI\HTTP\Api;

class Counties
{

    /**
     * Creates new instance of client
     */
    public function __construct(
        private Api $api
    )
    {}

    /**
     * Get Counties By ZIP Code
     * 
     * @param string $zipcode
     * @param array $params
     * @return array
     */
    public function getCountiesByZip(string $zipcode, array $params) : array
    {
        return $this->api->get('/counties/by/zip/' . $zipcode, $params);
    }

    /**
     *  Get Counties
     *
     * @param string $fips
     * @param array $params
     * @return array
     */
    public function getCounties(string $fips, array $params) : array
    {
        return $this->api->get('/counties/' . $fips, $params);
    }

}