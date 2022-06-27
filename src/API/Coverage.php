<?php

namespace TA\HealthcareMarketplaceAPI\API;

use TA\HealthcareMarketplaceAPI\HTTP\Api;

class Coverage
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
     * Coverage statistics
     *
     * @param array $params
     * @return array
     */
    public function coverageStatistics(array $params) : array
    {
        return $this->api->get('/coverage/stats', $params);
    }

    /**
     * Search providers
     *
     * @param array $params
     * @return array
     */
    public function searchProviders(array $params) : array
    {
        return $this->api->get('/coverage/search', $params);
    }
}