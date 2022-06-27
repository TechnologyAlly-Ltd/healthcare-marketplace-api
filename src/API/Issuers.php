<?php

namespace TA\HealthcareMarketplaceAPI\API;

use TA\HealthcareMarketplaceAPI\HTTP\Api;

class Issuers
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
     * List issuers
     *
     * @param array $params
     * @return array
     */
    public function listIssuers(array $params) : array
    {
        return $this->api->get('/issuers', $params);
    }

    /**
     * Get issuer
     *
     * @param string $issuer_id
     * @param array $params
     * @return array
     */
    public function getIssuers(string $issuer_id, array $params) : array
    {
        return $this->api->get('/issuers/'. $issuer_id, $params);
    }
}