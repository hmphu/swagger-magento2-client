<?php
/**
 * QuoteGuestCartTotalManagementVApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * QuoteGuestCartTotalManagementVApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QuoteGuestCartTotalManagementVApi
{

    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('http://springimport.net/rest/default');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return QuoteGuestCartTotalManagementVApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation quoteGuestCartTotalManagementV1CollectTotalsPut
     *
     * .
     *
     * @param string $cart_id The cart ID. (required)
     * @param \Swagger\Client\Model\Body4 $body  (optional)
     *
     * @return \Swagger\Client\Model\QuoteDataTotalsInterface
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function quoteGuestCartTotalManagementV1CollectTotalsPut($cart_id, $body = null)
    {
        list($response) = $this->quoteGuestCartTotalManagementV1CollectTotalsPutWithHttpInfo($cart_id, $body);
        return $response;
    }


    /**
     * Operation quoteGuestCartTotalManagementV1CollectTotalsPutWithHttpInfo
     *
     * .
     *
     * @param string $cart_id The cart ID. (required)
     * @param \Swagger\Client\Model\Body4 $body  (optional)
     *
     * @return Array of \Swagger\Client\Model\QuoteDataTotalsInterface, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function quoteGuestCartTotalManagementV1CollectTotalsPutWithHttpInfo($cart_id, $body = null)
    {
        
        // verify the required parameter 'cart_id' is set
        if ($cart_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cart_id when calling quoteGuestCartTotalManagementV1CollectTotalsPut');
        }

        // parse inputs
        $resourcePath = "/V1/guest-carts/{cartId}/collect-totals";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        
        
        // path params
        if ($cart_id !== null) {
            $resourcePath = str_replace(
                "{" . "cartId" . "}",
                $this->apiClient->getSerializer()->toPathValue($cart_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
                // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\QuoteDataTotalsInterface'
            );
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\QuoteDataTotalsInterface', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\QuoteDataTotalsInterface', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
