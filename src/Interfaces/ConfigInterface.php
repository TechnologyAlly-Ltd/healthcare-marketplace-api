<?php

namespace TA\HealthcareMarketplaceAPI\Interfaces;

interface ConfigInterface
{

    /**
     * Get All Marketplace Configuration Variables
     *
     * @return array
     */
    public function getConfig() : array ;

    /**
     * Get Configured API Key
     *
     * @return string
     */
    public function getApiKey() : string ;

    /**
     * Get Marketplace API Base URL
     *
     * @return string
     */
    public function getBaseURL() : string ;
}