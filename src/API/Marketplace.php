<?php

namespace TA\HealthcareMarketplaceAPI\API;

use TA\HealthcareMarketplaceAPI\HTTP\Api;

class Marketplace
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
     * Get Marketplace Versions
     *
     * @return array
     */
    public function getVersion() : array
    {
        return $this->api->get('/versions');
    }

    /**
     * Get Marketplace Market Years
     *
     * @return array
     */
    public function getMarketYears() : array
    {
        return $this->api->get('/market-years');
    }

    /**
     * Get Marketplace Crosswalk a previous year plan
     *
     * @param array $params
     * @return array
     */
    public function getCrosswalk(array $params) : array
    {
        return $this->api->get('/crosswalk', $params);
    }

    /**
     * Get Marketplace Rate Areas
     *
     * @param array $params
     * @return array
     */
    public function getRateAreas(array $params) : array
    {
        return $this->api->get('/rate-areas', $params);
    }

    /**
     * Get Marketplace Enrollment Validate
     *
     * @param array $data
     * @return array
     */
    public function getEnrollmentValidate(array $data) : array
    {
        return $this->api->post('/rate-areas', [], $data);
    }
}