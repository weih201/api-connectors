<?php
/**
 *  Copyright 2011 Wordnik, Inc.
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
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 */
class PositionApi {

  function __construct($apiClient) {
    $this->apiClient = $apiClient;
  }

  /**
   * find
   * Get your positions.
   * 
   * @param object $filter Table filter. For example, send {&quot;symbol&quot;: &quot;XBTF15&quot;}. (optional)
   * @param array[any] $columns Which columns to fetch. For example, send [&quot;columnName&quot;]. (optional)
   * @param float $count Number of rows to fetch. (optional)
   * @return Array[Position]
   */

   public function find($filter=null, $columns=null, $count=null) {

      //parse inputs
      $resourcePath = "/position";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($filter != null) {
        $queryParams['filter'] = $this->apiClient->toQueryValue($filter);
      }
      if($columns != null) {
        $queryParams['columns'] = $this->apiClient->toQueryValue($columns);
      }
      if($count != null) {
        $queryParams['count'] = $this->apiClient->toQueryValue($count);
      }
      // Generate form params
      if (! isset($body)) {
        $body = array();
      }
      if (empty($body)) {
        $body = null;
      }

      // Make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $body,
                                            $headerParams);


      if(! $response){
          return null;
      }

      $responseObject = $this->apiClient->deserialize($response,
                                                      'Array[Position]');
      return $responseObject;

      }
  

}
