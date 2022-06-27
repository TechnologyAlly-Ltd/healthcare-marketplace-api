<?php

namespace TA\HealthcareMarketplaceAPI\Interfaces;

interface APIInterface
{
    /**
     * HTTP Get Request
     *
     * @param string $uri
     * @param array $params
     * @return array
     */
    public function get(string $uri, array $params = []) : array ;

    /**
     * HTTP POST Request
     *
     * @param string $uri
     * @param array $params
     * @param array $data
     * @return array
     */
    public function post(string $uri, array $params = [], array $data = []) : array ;
}