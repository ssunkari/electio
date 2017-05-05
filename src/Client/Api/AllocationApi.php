<?php
/**
 * AllocationApi
 * PHP version 5
 *
 * @category Class
 * @package  ChrisHemmings\Electio
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Electio API
 *
 * A minimal Electio client
 *
 * OpenAPI spec version: 1.0.0
 * Contact: chris@hemmin.gs
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ChrisHemmings\Electio\Client\Api;

use \ChrisHemmings\Electio\ApiClient;
use \ChrisHemmings\Electio\ApiException;
use \ChrisHemmings\Electio\Configuration;
use \ChrisHemmings\Electio\ObjectSerializer;

/**
 * AllocationApi Class Doc Comment
 *
 * @category Class
 * @package  ChrisHemmings\Electio
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AllocationApi
{
    /**
     * API Client
     *
     * @var \ChrisHemmings\Electio\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \ChrisHemmings\Electio\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\ChrisHemmings\Electio\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \ChrisHemmings\Electio\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \ChrisHemmings\Electio\ApiClient $apiClient set the API client
     *
     * @return AllocationApi
     */
    public function setApiClient(\ChrisHemmings\Electio\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation allocateWithCarrierService
     *
     * Allocate a consignment to a specified delivery service
     *
     * @param \ChrisHemmings\Electio\Client\Model\AllocateWithCarrierService $allocation Consignment to create (optional)
     * @throws \ChrisHemmings\Electio\ApiException on non-2xx response
     * @return void
     */
    public function allocateWithCarrierService($allocation = null)
    {
        list($response) = $this->allocateWithCarrierServiceWithHttpInfo($allocation);
        return $response;
    }

    /**
     * Operation allocateWithCarrierServiceWithHttpInfo
     *
     * Allocate a consignment to a specified delivery service
     *
     * @param \ChrisHemmings\Electio\Client\Model\AllocateWithCarrierService $allocation Consignment to create (optional)
     * @throws \ChrisHemmings\Electio\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function allocateWithCarrierServiceWithHttpInfo($allocation = null)
    {
        // parse inputs
        $resourcePath = "/allocation/allocateWithCarrierService";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($allocation)) {
            $_tempBody = $allocation;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Ocp-Apim-Subscription-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['Ocp-Apim-Subscription-Key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/allocation/allocateWithCarrierService'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ChrisHemmings\Electio\Client\Model\ResponseError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
