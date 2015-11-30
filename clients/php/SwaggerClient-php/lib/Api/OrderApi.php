<?php
/**
 * OrderApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2015 SmartBear Software
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
 * OrderApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderApi
{

    /**
     * API Client
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://localhost/api/v1');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     * @return OrderApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * orderGetOrders
     *
     * Get your orders.
     *
     * @param string $symbol Instrument symbol. Send a bare series (e.g. XBU) to get data for the nearest expiring contract in that series.\n\nYou can also send a timeframe, e.g. &#39;XBU:monthly&#39;. Timeframes are &#39;daily&#39;, &#39;weekly&#39;, &#39;monthly&#39;, &#39;quarterly&#39;, and &#39;biquarterly&#39;. (optional)
     * @param string $filter Generic table filter. Send JSON key/value pairs, such as {\&quot;key\&quot;: \&quot;value\&quot;}. You can key on individual fields, and do more advanced querying on timestamps. See &lt;a href=\&quot;http://localhost:2001/app/restAPI#timestamp-filters\&quot;&gt;http://localhost:2001/app/restAPI#timestamp-filters&lt;/a&gt; for more details. (optional)
     * @param string $columns Array of column names to fetch. If omitted, will return all columns.\n\nNote that this method will always return item keys, even when not specified, so you may receive more columns that you expect. (optional)
     * @param Number $count Number of results to fetch. (optional)
     * @param Number $start Starting point for results. (optional)
     * @param bool $reverse If true, will sort results newest first. (optional)
     * @param \DateTime $start_time Starting date filter for results. (optional)
     * @param \DateTime $end_time Ending date filter for results. (optional)
     * @return \Swagger\Client\Model\Order[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function orderGetOrders($symbol=null, $filter=null, $columns=null, $count=null, $start=null, $reverse=null, $start_time=null, $end_time=null)
    {
        
  
        // parse inputs
        $resourcePath = "/order";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json', 'application/xml', 'text/xml', 'application/javascript', 'text/javascript'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json','application/x-www-form-urlencoded'));
  
        // query params
        if ($symbol !== null) {
            $queryParams['symbol'] = $this->apiClient->getSerializer()->toQueryValue($symbol);
        }// query params
        if ($filter !== null) {
            $queryParams['filter'] = $this->apiClient->getSerializer()->toQueryValue($filter);
        }// query params
        if ($columns !== null) {
            $queryParams['columns'] = $this->apiClient->getSerializer()->toQueryValue($columns);
        }// query params
        if ($count !== null) {
            $queryParams['count'] = $this->apiClient->getSerializer()->toQueryValue($count);
        }// query params
        if ($start !== null) {
            $queryParams['start'] = $this->apiClient->getSerializer()->toQueryValue($start);
        }// query params
        if ($reverse !== null) {
            $queryParams['reverse'] = $this->apiClient->getSerializer()->toQueryValue($reverse);
        }// query params
        if ($start_time !== null) {
            $queryParams['startTime'] = $this->apiClient->getSerializer()->toQueryValue($start_time);
        }// query params
        if ($end_time !== null) {
            $queryParams['endTime'] = $this->apiClient->getSerializer()->toQueryValue($end_time);
        }
        
        
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\Order[]'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Order[]', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Order[]', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 400:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 401:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 404:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * orderNewOrder
     *
     * Create a new order.
     *
     * @param string $symbol Instrument symbol. (required)
     * @param Number $quantity Quantity. Use positive numbers to buy, negative to sell. (required)
     * @param double $price Order price. (required)
     * @param string $time_in_force Time in force. Valid options: &#39;IOC&#39; (Immediate-Or-Cancel), &#39;GTC&#39; (Good-Till-Cancelled). (optional)
     * @param string $type Order type. Available: &#39;Limit&#39;, &#39;StopLimit&#39; (optional)
     * @param double $stop_price If order type is &#39;StopLimit&#39;, this is the trigger/stop price. (optional)
     * @param string $cl_ord_id Optional Client Order ID to give this order. This ID will come back on any execution messages tied to this order. (optional)
     * @return \Swagger\Client\Model\Order
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function orderNewOrder($symbol, $quantity, $price, $time_in_force=null, $type=null, $stop_price=null, $cl_ord_id=null)
    {
        
        // verify the required parameter 'symbol' is set
        if ($symbol === null) {
            throw new \InvalidArgumentException('Missing the required parameter $symbol when calling orderNewOrder');
        }
        // verify the required parameter 'quantity' is set
        if ($quantity === null) {
            throw new \InvalidArgumentException('Missing the required parameter $quantity when calling orderNewOrder');
        }
        // verify the required parameter 'price' is set
        if ($price === null) {
            throw new \InvalidArgumentException('Missing the required parameter $price when calling orderNewOrder');
        }
  
        // parse inputs
        $resourcePath = "/order";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json', 'application/xml', 'text/xml', 'application/javascript', 'text/javascript'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json','application/x-www-form-urlencoded'));
  
        
        
        
        // form params
        if ($symbol !== null) {
            
            
            $formParams['symbol'] = $this->apiClient->getSerializer()->toFormValue($symbol);
            
        }// form params
        if ($quantity !== null) {
            
            
            $formParams['quantity'] = $this->apiClient->getSerializer()->toFormValue($quantity);
            
        }// form params
        if ($price !== null) {
            
            
            $formParams['price'] = $this->apiClient->getSerializer()->toFormValue($price);
            
        }// form params
        if ($time_in_force !== null) {
            
            
            $formParams['timeInForce'] = $this->apiClient->getSerializer()->toFormValue($time_in_force);
            
        }// form params
        if ($type !== null) {
            
            
            $formParams['type'] = $this->apiClient->getSerializer()->toFormValue($type);
            
        }// form params
        if ($stop_price !== null) {
            
            
            $formParams['stopPrice'] = $this->apiClient->getSerializer()->toFormValue($stop_price);
            
        }// form params
        if ($cl_ord_id !== null) {
            
            
            $formParams['clOrdID'] = $this->apiClient->getSerializer()->toFormValue($cl_ord_id);
            
        }
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\Order'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Order', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Order', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 400:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 401:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 404:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * orderCancelOrder
     *
     * Cancel order(s). Send multiple order IDs to cancel in bulk.
     *
     * @param string $order_id Order ID(s). (optional)
     * @param string $cl_ord_id Client Order ID(s). See POST /order. (optional)
     * @param string $text Optional cancellation annotation. e.g. &#39;Spread Exceeded&#39; (optional)
     * @return \Swagger\Client\Model\Order[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function orderCancelOrder($order_id=null, $cl_ord_id=null, $text=null)
    {
        
  
        // parse inputs
        $resourcePath = "/order";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "DELETE";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json', 'application/xml', 'text/xml', 'application/javascript', 'text/javascript'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json','application/x-www-form-urlencoded'));
  
        
        
        
        // form params
        if ($order_id !== null) {
            
            
            $formParams['orderID'] = $this->apiClient->getSerializer()->toFormValue($order_id);
            
        }// form params
        if ($cl_ord_id !== null) {
            
            
            $formParams['clOrdID'] = $this->apiClient->getSerializer()->toFormValue($cl_ord_id);
            
        }// form params
        if ($text !== null) {
            
            
            $formParams['text'] = $this->apiClient->getSerializer()->toFormValue($text);
            
        }
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\Order[]'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Order[]', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Order[]', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 400:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 401:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 404:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * orderCancelAll
     *
     * Cancels all of your orders.
     *
     * @param string $symbol Optional symbol. If provided, only cancels orders for that symbol. (optional)
     * @param string $filter Optional filter for cancellation. Use to only cancel some orders, e.g. `{\&quot;side\&quot;: \&quot;Buy\&quot;}`. (optional)
     * @param string $text Optional cancellation annotation. e.g. &#39;Spread Exceeded&#39; (optional)
     * @return \Swagger\Client\Model\InlineResponse200
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function orderCancelAll($symbol=null, $filter=null, $text=null)
    {
        
  
        // parse inputs
        $resourcePath = "/order/all";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "DELETE";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json', 'application/xml', 'text/xml', 'application/javascript', 'text/javascript'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json','application/x-www-form-urlencoded'));
  
        
        
        
        // form params
        if ($symbol !== null) {
            
            
            $formParams['symbol'] = $this->apiClient->getSerializer()->toFormValue($symbol);
            
        }// form params
        if ($filter !== null) {
            
            
            $formParams['filter'] = $this->apiClient->getSerializer()->toFormValue($filter);
            
        }// form params
        if ($text !== null) {
            
            
            $formParams['text'] = $this->apiClient->getSerializer()->toFormValue($text);
            
        }
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\InlineResponse200'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse200', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse200', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 400:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 401:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 404:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * orderCancelAllAfter
     *
     * Automatically cancel all your orders after a specified timeout.
     *
     * @param double $timeout Timeout in ms. Set to 0 to cancel this timer. (required)
     * @return \Swagger\Client\Model\InlineResponse200
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function orderCancelAllAfter($timeout)
    {
        
        // verify the required parameter 'timeout' is set
        if ($timeout === null) {
            throw new \InvalidArgumentException('Missing the required parameter $timeout when calling orderCancelAllAfter');
        }
  
        // parse inputs
        $resourcePath = "/order/cancelAllAfter";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json', 'application/xml', 'text/xml', 'application/javascript', 'text/javascript'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json','application/x-www-form-urlencoded'));
  
        
        
        
        // form params
        if ($timeout !== null) {
            
            
            $formParams['timeout'] = $this->apiClient->getSerializer()->toFormValue($timeout);
            
        }
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\InlineResponse200'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse200', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse200', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 400:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 401:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 404:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * orderClosePosition
     *
     * Close a position with a market order.
     *
     * @param string $symbol Symbol of position to close. (required)
     * @param double $price Optional limit price. (optional)
     * @return \Swagger\Client\Model\Order
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function orderClosePosition($symbol, $price=null)
    {
        
        // verify the required parameter 'symbol' is set
        if ($symbol === null) {
            throw new \InvalidArgumentException('Missing the required parameter $symbol when calling orderClosePosition');
        }
  
        // parse inputs
        $resourcePath = "/order/closePosition";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json', 'application/xml', 'text/xml', 'application/javascript', 'text/javascript'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json','application/x-www-form-urlencoded'));
  
        
        
        
        // form params
        if ($symbol !== null) {
            
            
            $formParams['symbol'] = $this->apiClient->getSerializer()->toFormValue($symbol);
            
        }// form params
        if ($price !== null) {
            
            
            $formParams['price'] = $this->apiClient->getSerializer()->toFormValue($price);
            
        }
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\Order'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Order', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Order', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 400:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 401:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 404:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * orderGetCloseOutOrders
     *
     * Get open liquidation orders.
     *
     * @param string $filter Filter. For example, send {\&quot;symbol\&quot;: \&quot;XBT24H\&quot;}. (optional)
     * @return \Swagger\Client\Model\LiquidationOrder[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function orderGetCloseOutOrders($filter=null)
    {
        
  
        // parse inputs
        $resourcePath = "/order/liquidations";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json', 'application/xml', 'text/xml', 'application/javascript', 'text/javascript'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json','application/x-www-form-urlencoded'));
  
        // query params
        if ($filter !== null) {
            $queryParams['filter'] = $this->apiClient->getSerializer()->toQueryValue($filter);
        }
        
        
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\LiquidationOrder[]'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LiquidationOrder[]', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LiquidationOrder[]', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 400:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 401:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 404:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
}