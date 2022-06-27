<?php

namespace TA\HealthcareMarketplaceAPI\API;

use TA\HealthcareMarketplaceAPI\HTTP\Api;

class Coverage
{

    /**
     * Creates new instance of client
     */
    public function __construct(
        private Api $api
    )
    {}

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