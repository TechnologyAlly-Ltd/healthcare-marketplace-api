<?php

namespace TA\HealthcareMarketplaceAPI\HTTP;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;
use TA\HealthcareMarketplaceAPI\Config\Config;
use TA\HealthcareMarketplaceAPI\ENUM\HTTPMethod;
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
        return $this->request(
            HTTPMethod::GET,
            $uri,
            $params,
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
        return $this->request(
            HTTPMethod::POST,
            $uri,
            $params,
            $data
        );
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

    /**
     * Make an HTTP request
     *
     * @param HTTPMethod $method
     * @param string $uri
     * @param array $params
     * @param array $data
     * @return ResponseInterface
     */
    private function request(HTTPMethod $method, string $uri, array $params = [], array $data = []) : ResponseInterface
    {
        $options = [
            'query' => $this->getCompleteParams($params),
            'headers' => [
                'Accept'     => 'application/json',
            ]
        ];

        if($method === HTTPMethod::POST){
            $options = array_merge($options, [
                'form_params' => $data
            ]);
        }

        return $this->client->request(
            $method->value,
            $this->config->getBaseURL() . $uri,
            $options
        );
    }

}