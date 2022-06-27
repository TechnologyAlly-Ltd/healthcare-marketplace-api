<?php

namespace TA\HealthcareMarketplaceAPI\Config;

use TA\HealthcareMarketplaceAPI\Interfaces\ConfigInterface;

class Config implements ConfigInterface
{
    /**
     * @param string $api_key
     * @param string $base_url
     */
    public function __construct(
        private string $api_key,
        private string $base_url = 'https://marketplace.api.healthcare.gov/api/v1'
    ){}

    /**
     * Get All Marketplace Configuration Variables
     *
     * @return array
     */
    public function getConfig() : array
    {
        return [
            'api_key' => $this->api_key,
            'base_url' => $this->base_url
        ];
    }

    /**
     * Get Configured API Key
     *
     * @return string
     */
    public function getApiKey() : string
    {
        return $this->api_key;
    }

    /**
     * Get Marketplace API Base URL
     *
     * @return string
     */
    public function getBaseURL() : string
    {
        return $this->base_url;
    }
}