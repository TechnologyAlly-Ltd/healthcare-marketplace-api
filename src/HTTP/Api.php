<?php

namespace TA\HealthcareMarketplaceAPI\HTTP;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
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
     * Holds the Config for the request
     *
     * @var Config
     */
    private Config $config;

    /**
     * Creates new instance of client
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
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
     * @param string $method
     * @param string $uri
     * @param array $params
     * @param array $data
     * @return array
     */
    private function request(string $method, string $uri, array $params = [], array $data = []) : array
    {
        $options = [
            'query' => $this->getCompleteParams($params),
            'headers' => [
                'Accept'     => 'application/json',
                'Content-Type' => 'application/json',
            ],
            'http_errors' => true
        ];

        if($method === HTTPMethod::POST){
            $options = array_merge($options, [
                'body' => json_encode($data)
            ]);
        }
        try{
            $response = $this->client->request(
                $method,
                $this->config->getBaseURL() . $uri,
                $options
            );
            return [
                'Status' => HTTPResponse::SUCCESS,
                'Status_Code' => $response->getStatusCode(),
                'Message' => json_decode($response->getBody()->getContents(), true),
            ];
        }catch(ClientException $e) {
            return $this->getResponse($e);
        }catch(BadResponseException $e) {
            return $this->getResponse($e);
        }
    }

    /**
     * Gets response data fro, an exception
     *
     * @param BadResponseException|ClientException $e
     * @return array
     */
    private function getResponse($e) : array
    {
        $response = $e->getResponse();
        $response_array = json_decode($response->getBody()->getContents(), true);
        return [
            'Status' => HTTPResponse::ERROR,
            'Status_Code' => $response->getStatusCode(),
            'Message' => $response_array['message'],
            'Error' => $response_array['error'],
        ];
    }

}