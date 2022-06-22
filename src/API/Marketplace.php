<?php

namespace TA\HealthcareMarketplaceAPI\API;

use Psr\Http\Message\ResponseInterface;
use TA\HealthcareMarketplaceAPI\API\HTTP\Api;

class Marketplace
{

    /**
     * Creates new instance of client
     */
    public function __construct(
        private Api $api
    )
    {}

    /**
     * Get Marketplace Versions
     *
     * @return ResponseInterface
     */
    public function getVersion() : ResponseInterface
    {
        return $this->api->get('/versions');
    }

    /**
     * Get Marketplace Market Years
     *
     * @return ResponseInterface
     */
    public function getMarketYears() : ResponseInterface
    {
        return $this->api->get('/market-years');
    }

    /**
     * Get Marketplace Crosswalk a previous year plan
     *
     * @param array $params
     * @return ResponseInterface
     */
    public function getCrosswalk(array $params) : ResponseInterface
    {
        return $this->api->get('/crosswalk', $params);
    }

    /**
     * Get Marketplace Rate Areas
     *
     * @param array $params
     * @return ResponseInterface
     */
    public function getRateAreas(array $params) : ResponseInterface
    {
        return $this->api->get('/rate-areas', $params);
    }

    /**
     * Get Marketplace Enrollment Validate
     *
     * @return ResponseInterface
     */
    public function getEnrollmentValidate() : ResponseInterface
    {
        return $this->api->post('/rate-areas');
    }
}