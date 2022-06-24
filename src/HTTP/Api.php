<?php

namespace TA\HealthcareMarketplaceAPI\HTTP;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use TA\HealthcareMarketplaceAPI\Config\Config;
use TA\HealthcareMarketplaceAPI\ENUM\HTTPMethod;
use TA\HealthcareMarketplaceAPI\ENUM\HTTPResponse;
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
     * @return array
     */
    public function get(string $uri, array $params = []) : array
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
     * @return array
     */
    public function post(string $uri, array $params = [], array $data = []) : array
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
     * @return array
     */
    private function request(HTTPMethod $method, string $uri, array $params = [], array $data = []) : array
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
        try{
            $response = $this->client->request(
                $method->value,
                $this->config->getBaseURL() . $uri,
                $options
            );
            return [
                'Status' => HTTPResponse::SUCCESS->value,
                'Status_Code' => $response->getStatusCode(),
                'Message' => $response->getBody()->getContents(),
            ];
        }catch(ClientException $e) {
            $response = $e->getResponse();
            return [
                'Status' => HTTPResponse::ERROR->value,
                'Status_Code' => $response->getStatusCode(),
                'Message' => $response->getBody()->getContents(),
            ];
        }
    }

}