<?php

namespace TA\HealthcareMarketplaceAPI;

use TA\HealthcareMarketplaceAPI\API\Counties;
use TA\HealthcareMarketplaceAPI\API\Coverage;
use TA\HealthcareMarketplaceAPI\API\Drugs;
use TA\HealthcareMarketplaceAPI\API\Households;
use TA\HealthcareMarketplaceAPI\API\Issuers;
use TA\HealthcareMarketplaceAPI\HTTP\Api;
use TA\HealthcareMarketplaceAPI\API\Marketplace;
use TA\HealthcareMarketplaceAPI\API\Plans;
use TA\HealthcareMarketplaceAPI\API\Providers;
use TA\HealthcareMarketplaceAPI\API\States;
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
     * Api Key for the request
     *
     * @var string
     */
    private string $api_key;

    /**
     * Base URL for the request
     *
     * @var string
     */
    private string $base_url;

    /**
     * @param string $api_key
     * @param string $base_url
     */
    public function __construct(string $api_key, string $base_url = 'https://marketplace.api.healthcare.gov/api/v1')
    {
        $this->api_key = $api_key;
        $this->base_url = $base_url;
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

    /**
     * Holds the API instance for the request
     *
     * @return Api
     */
    private function Api() : Api
    {
        return new Api(
            $this->config
        );
    }

    /**
     * Get the Marketplace instance
     *
     * @return Marketplace
     */
    public function Marketplace() : Marketplace
    {
        return new Marketplace(
            $this->Api()
        );
    }

    /**
     * Get the Counties instance
     *
     * @return Counties
     */
    public function Counties() : Counties
    {
        return new Counties(
            $this->Api()
        );
    }

    /**
     * Get the Drugs instance
     *
     * @return Drugs
     */
    public function Drugs() : Drugs
    {
        return new Drugs(
            $this->Api()
        );
    }

    /**
     * Get the Households instance
     *
     * @return Households
     */
    public function Households() : Households
    {
        return new Households(
            $this->Api()
        );
    }

    /**
     * Get the Issuers instance
     *
     * @return Issuers
     */
    public function Issuers() : Issuers
    {
        return new Issuers(
            $this->Api()
        );
    }

    /**
     * Get the Coverage instance
     *
     * @return Coverage
     */
    public function Coverage() : Coverage
    {
        return new Coverage(
            $this->Api()
        );
    }

    /**
     * Get the Providers instance
     *
     * @return Providers
     */
    public function Providers() : Providers
    {
        return new Providers(
            $this->Api()
        );
    }

    /**
     * Get the States instance
     *
     * @return States
     */
    public function States() : States
    {
        return new States(
            $this->Api()
        );
    }

    /**
     * Get the Plans instance
     *
     * @return Plans
     */
    public function Plans() : Plans
    {
        return new Plans(
            $this->Api()
        );
    }
}
