<?php

namespace TA\HealthcareMarketplaceAPI\API\HTTP;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;
use TA\HealthcareMarketplaceAPI\Config\Config;
use TA\HealthcareMarketplaceAPI\Interfaces\APIInterface;

class Api implements APIInterface
{
    /**
     * Holds the HTTP Client for the request
     *
     * @var Client
     */
    private Client $client;

    /**
     * Creates new instance of client
     */
    public function __construct(
        private Config $config
    )
    {
        $this->client = new Client();
    }

    /**
     * HTTP Get Request
     *
     * @param string $uri
     * @param array $params
     * @return ResponseInterface
     */
    public function get(string $uri, array $params = []) : ResponseInterface
    {
        return $this->client->request(
            'GET',
            $this->getFullURI($uri),
            $this->getCompleteParams($params),
        );
    }

    /**
     * HTTP POST Request
     *
     * @param string $uri
     * @param array $params
     * @param array $data
     * @return ResponseInterface
     */
    public function post(string $uri, array $params = [], array $data = []) : ResponseInterface
    {
        return $this->client->request(
            'POST',
            $this->getFullURI($uri),
            $this->getCompleteParams($params),
            $data
        );
    }

    /**
     * Get Full URI
     *
     * @param string $uri
     * @return string
     */
    private function getFullURI(string $uri) : string
    {
        return $this->config->getBaseURL() . $uri;
    }

    /**
     * Get Complete Params
     *
     * @param array $params
     * @return array
     */
    private function getCompleteParams(array $params) : array
    {
        return array_merge($params, [
            'apikey' => $this->config->getApiKey()
        ]);
    }

}