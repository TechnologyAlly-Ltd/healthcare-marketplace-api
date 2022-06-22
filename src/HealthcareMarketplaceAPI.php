<?php

namespace TA\HealthcareMarketplaceAPI;

use TA\HealthcareMarketplaceAPI\Config\Config;

class HealthcareMarketplaceAPI
{
    /**
     * Holds the configuration for the whole API
     *
     * @var Config
     */
    protected Config $config;

    /**
     * @param string $api_key
     */
    public function __construct(
        private string $api_key,
        private string $base_url = 'https://marketplace.api.healthcare.gov/api/v1'
    ){
        $this->config = new Config(
            $this->api_key,
            $this->base_url
        );
    }

    /**
     * Get the Current Config Variables
     *
     * @return Config
     */
    public function Config() : Config
    {
        return $this->config;
    }
}
