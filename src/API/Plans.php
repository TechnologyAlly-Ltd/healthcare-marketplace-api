<?php

namespace TA\HealthcareMarketplaceAPI\API;

use TA\HealthcareMarketplaceAPI\HTTP\Api;

class Plans
{

    /**
     * Creates new instance of client
     */
    public function __construct(
        private Api $api
    )
    {}

    /**
     * Get multiple plans
     *
     * @param array $params
     * @param array $data
     * @return array
     */
    public function getMultiplePlans(array $params, array $data) : array
    {
        return $this->api->post('/plans', $params, $data);
    }

    /**
     * Get plan details with premiums for a household
     *
     * @param string $plan_id
     * @param array $data
     * @return array
     */
    public function getPlanDetials(string $plan_id, array $data) : array
    {
        return $this->api->post('/plans/' . $plan_id, [], $data);
    }

    /**
     * Get Plan Qualtiy Ratings
     *
     * @param string $plan_id
     * @param array $params
     * @return array
     */
    public function getPlanQualtiyRatings(string $plan_id, array $params) : array
    {
        return $this->api->get('/plans/' . $plan_id . '/quality-ratings', $params);
    }

    /**
     * Get a Plan
     *
     * @param string $plan_id
     * @param array $params
     * @return array
     */
    public function getPlan(string $plan_id, array $params) : array
    {
        return $this->api->get('/plans/' . $plan_id, $params);
    }

    /**
     * Search for insurance plans
     *
     * @param array $params
     * @param array $data
     * @return array
     */
    public function searchInsurancePlans(array $params, array $data) : array
    {
        return $this->api->post('/plans/search', $params, $data);
    }

    /**
     * Retrieve stats on groups of insurance plans
     *
     * @param array $params
     * @param array $data
     * @return array
     */
    public function searchInsurancePlansStats(array $params, array $data) : array
    {
        return $this->api->post('/plans/search/stats', $params, $data);
    }
}