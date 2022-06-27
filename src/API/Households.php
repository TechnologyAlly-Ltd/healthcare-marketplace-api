<?php

namespace TA\HealthcareMarketplaceAPI\API;

use TA\HealthcareMarketplaceAPI\HTTP\Api;

class Households
{

    /**
     * Creates new instance of client
     */
    public function __construct(
        private Api $api
    )
    {}

    /**
     * Get Households PCFPL
     *
     * @param array $params
     * @return array
     */
    public function householdsPCFPL(array $params) : array
    {
        return $this->api->get('/households/pcfpl', $params);
    }

    /**
     * Get lowest cost silver plan
     *
     * @param array $params
     * @param array $data
     * @return array
     */
    public function getLowestCostSilverPlan(array $params, array $data) : array
    {
        return $this->api->post('/households/lcsp', $params, $data);
    }

    /**
     * Get second lowest cost silver plan
     *
     * @param array $params
     * @param array $data
     * @return array
     */
    public function getSecondLowestCostSilverPlan(array $params, array $data) : array
    {
        return $this->api->post('/households/slcsp', $params, $data);
    }

    /**
     * Get lowest cost bronze plan for a household
     *
     * @param array $params
     * @param array $data
     * @return array
     */
    public function getLowestCostBronzePlan(array $params, array $data) : array
    {
        return $this->api->post('/households/lcbp', $params, $data);
    }

    /**
     * Get affordability and premium of the lowest cost silver plan
     *
     * @param array $params
     * @param array $data
     * @return array
     */
    public function getAffordiblityAndPremiumOfLowestCostSilverPlan(array $params, array $data) : array
    {
        return $this->api->post('/households/ichra', $params, $data);
    }

    /**
     * Get house eligiblity estimates
     *
     * @param array $params
     * @param array $data
     * @return array
     */
    public function getHouseEligiblityEstimates(array $params, array $data) : array
    {
        return $this->api->post('/households/eligibility/estimates', $params, $data);
    }
}