<?php

namespace TA\HealthcareMarketplaceAPI\API;

use TA\HealthcareMarketplaceAPI\HTTP\Api;

class Providers
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
     * Autocomplete nearby providers
     *
     * @param array $params
     * @return array
     */
    public function autocompleteNearbyProviders(array $params) : array
    {
        return $this->api->get('/providers/autocomplete', $params);
    }

    /**
     * Search providers
     *
     * @param array $params
     * @return array
     */
    public function search(array $params) : array
    {
        return $this->api->get('/providers/search', $params);
    }

    /**
     * Get a list of whether a set of providers are covered by given plans
     *
     * @param array $params
     * @return array
     */
    public function listOfCoveredProvidersByBPlans(array $params) : array
    {
        return $this->api->get('/providers/covered', $params);
    }
}