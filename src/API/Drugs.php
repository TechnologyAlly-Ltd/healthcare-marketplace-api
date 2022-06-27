<?php

namespace TA\HealthcareMarketplaceAPI\API;

use TA\HealthcareMarketplaceAPI\HTTP\Api;

class Drugs
{

    /**
     * Holds the API object for the request
     *
     * @var Api
     */
    private Api $api;

    /**
     * Creates new instance of client
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }

    /**
     * Autocomplete drugs by name
     *
     * @param array $params
     * @return array
     */
    public function autoCompleteDrugs(array $params) : array
    {
        return $this->api->get('/drugs/autocomplete', $params);
    }

    /**
     * Search prescription drugs
     *
     * @param array $params
     * @return array
     */
    public function searchDrugs(array $params) : array
    {
        return $this->api->get('/drugs/search', $params);
    }

    /**
     * Get a list of whether drugs are covered by plans
     *
     * @param array $params
     * @return array
     */
    public function coveredDrugs(array $params) : array
    {
        return $this->api->get('/drugs/covered', $params);
    }

}