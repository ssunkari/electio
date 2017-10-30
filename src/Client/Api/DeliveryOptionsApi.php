<?php
/**
 * DeliveryOptionsApi
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
 * OpenAPI spec version: 1.0.1
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
 * DeliveryOptionsApi Class Doc Comment
 *
 * @category Class
 * @package  ChrisHemmings\Electio
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DeliveryOptionsApi
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
     * @return DeliveryOptionsApi
     */
    public function setApiClient(\ChrisHemmings\Electio\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getConsignmentDeliveryOptions
     *
     * Fetch delivery options for a consignment
     *
     * @param string $consignment_reference Consignment to create (required)
     * @throws \ChrisHemmings\Electio\ApiException on non-2xx response
     * @return \ChrisHemmings\Electio\Client\Model\DeliveryOptionsResponse
     */
    public function getConsignmentDeliveryOptions($consignment_reference)
    {
        list($response) = $this->getConsignmentDeliveryOptionsWithHttpInfo($consignment_reference);
        return $response;
    }

    /**
     * Operation getConsignmentDeliveryOptionsWithHttpInfo
     *
     * Fetch delivery options for a consignment
     *
     * @param string $consignment_reference Consignment to create (required)
     * @throws \ChrisHemmings\Electio\ApiException on non-2xx response
     * @return array of \ChrisHemmings\Electio\Client\Model\DeliveryOptionsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getConsignmentDeliveryOptionsWithHttpInfo($consignment_reference)
    {
        // verify the required parameter 'consignment_reference' is set
        if ($consignment_reference === null) {
            throw new \InvalidArgumentException('Missing the required parameter $consignment_reference when calling getConsignmentDeliveryOptions');
        }
        // parse inputs
        $resourcePath = "/deliveryoptions/consignment/{consignmentReference}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($consignment_reference !== null) {
            $resourcePath = str_replace(
                "{" . "consignmentReference" . "}",
                $this->apiClient->getSerializer()->toPathValue($consignment_reference),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ChrisHemmings\Electio\Client\Model\DeliveryOptionsResponse',
                '/deliveryoptions/consignment/{consignmentReference}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ChrisHemmings\Electio\Client\Model\DeliveryOptionsResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ChrisHemmings\Electio\Client\Model\DeliveryOptionsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ChrisHemmings\Electio\Client\Model\ResponseError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getDeliveryOptions
     *
     * Get delivery options for passed consignment details
     *
     * @param \ChrisHemmings\Electio\Client\Model\DeliveryOptionsRequest $allocation Consignment to create (optional)
     * @throws \ChrisHemmings\Electio\ApiException on non-2xx response
     * @return \ChrisHemmings\Electio\Client\Model\DeliveryOptionsResponse
     */
    public function getDeliveryOptions($allocation = null)
    {
        list($response) = $this->getDeliveryOptionsWithHttpInfo($allocation);
        return $response;
    }

    /**
     * Operation getDeliveryOptionsWithHttpInfo
     *
     * Get delivery options for passed consignment details
     *
     * @param \ChrisHemmings\Electio\Client\Model\DeliveryOptionsRequest $allocation Consignment to create (optional)
     * @throws \ChrisHemmings\Electio\ApiException on non-2xx response
     * @return array of \ChrisHemmings\Electio\Client\Model\DeliveryOptionsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDeliveryOptionsWithHttpInfo($allocation = null)
    {
        // parse inputs
        $resourcePath = "/deliveryoptions";
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ChrisHemmings\Electio\Client\Model\DeliveryOptionsResponse',
                '/deliveryoptions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ChrisHemmings\Electio\Client\Model\DeliveryOptionsResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ChrisHemmings\Electio\Client\Model\DeliveryOptionsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ChrisHemmings\Electio\Client\Model\ResponseError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getDeliveryOptionsHeartbeat
     *
     * Get delivery options for passed consignment details
     *
     * @param \ChrisHemmings\Electio\Client\Model\DeliveryOptionsRequest $allocation Consignment to create (optional)
     * @throws \ChrisHemmings\Electio\ApiException on non-2xx response
     * @return \ChrisHemmings\Electio\Client\Model\DeliveryOptionsResponse
     */
    public function getDeliveryOptionsHeartbeat($allocation = null)
    {
        list($response) = $this->getDeliveryOptionsHeartbeatWithHttpInfo($allocation);
        return $response;
    }

    /**
     * Operation getDeliveryOptionsHeartbeatWithHttpInfo
     *
     * Get delivery options for passed consignment details
     *
     * @param \ChrisHemmings\Electio\Client\Model\DeliveryOptionsRequest $allocation Consignment to create (optional)
     * @throws \ChrisHemmings\Electio\ApiException on non-2xx response
     * @return array of \ChrisHemmings\Electio\Client\Model\DeliveryOptionsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDeliveryOptionsHeartbeatWithHttpInfo($allocation = null)
    {
        // parse inputs
        $resourcePath = "/deliveryoptions/heartbeat";
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ChrisHemmings\Electio\Client\Model\DeliveryOptionsResponse',
                '/deliveryoptions/heartbeat'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ChrisHemmings\Electio\Client\Model\DeliveryOptionsResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ChrisHemmings\Electio\Client\Model\DeliveryOptionsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ChrisHemmings\Electio\Client\Model\ResponseError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
