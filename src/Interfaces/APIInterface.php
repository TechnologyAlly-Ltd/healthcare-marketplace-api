<?php

namespace TA\HealthcareMarketplaceAPI\Interfaces;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

interface APIInterface
{
    /**
     * Holds the HTTP Client for the request
     *
     * @var Client
     */
    private Client $client;

    /**
     * HTTP Get Request
     *
     * @param string $uri
     * @param array $params
     * @return ResponseInterface
     */
    public function get(string $uri, array $params = []) : ResponseInterface ;

    /**
     * HTTP POST Request
     *
     * @param string $uri
     * @param array $params
     * @param array $data
     * @return ResponseInterface
     */
    public function post(string $uri, array $params = [], array $data = []) : ResponseInterface ;
}