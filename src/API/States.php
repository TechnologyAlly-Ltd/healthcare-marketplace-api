<?php

namespace TA\HealthcareMarketplaceAPI\API;

use TA\HealthcareMarketplaceAPI\HTTP\Api;

class States
{

    /**
     * Creates new instance of client
     */
    public function __construct(
        private Api $api
    )
    {}

    /**
     * Get States
     *
     * @param array $params
     * @return array
     */
    public function getStates(array $params) : array
    {
        return $this->api->get('/states', $params);
    }

    /**
     * Get States by abbreviation
     *
     * @param string $abbrev
     * @param array $params
     * @return array
     */
    public function getStatesByAbbreviation(string $abbrev, array $params) : array
    {
        return $this->api->get('/states/' . $abbrev, $params);
    }

    /**
     * Get States by abbreviation Medicaid
     *
     * @param string $abbrev
     * @param array $params
     * @return array
     */
    public function getStatesByAbbreviationMedicaid(string $abbrev, array $params) : array
    {
        return $this->api->get('/states/' . $abbrev . '/medicaid', $params);
    }

    /**
     * Get States by abbreviation PovertyGuidelines
     *
     * @param string $abbrev
     * @param array $params
     * @return array
     */
    public function getStatesByAbbreviationPovertyGuidelines(string $abbrev, array $params) : array
    {
        return $this->api->get('/states/' . $abbrev . '/poverty-guidelines', $params);
    }
}