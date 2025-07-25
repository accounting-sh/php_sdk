<?php

/**
 * SearchApi
 * PHP version 8.1
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 */

/**
 * Accounting API
 *
 * The version of the OpenAPI document: 8.3.2
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.6.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Accounting\Api;

use InvalidArgumentException;
use Accounting\Accounting;
use Accounting\ApiException;

/**
 * SearchApi Class Doc Comment
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 */
class SearchApi
{
    /**
     * @var Accounting
     */
    protected Accounting $client;

    /**
     * @param Accounting $client
     */
    public function __construct(Accounting $client)
    {
        $this->client = $client;
    }



    /**
     * Operation search
     *
     * Search
     *
     * @param  string $q Query string (required)
     * @param  string|null $exclude Exclude specific types. This is a comma separated list. (optional)
     * @param  string|null $only Perfom search only on those types. This is a comma separated list. (optional)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/search
     */
    public function search(
        string $q,
        string|null $exclude = null,
        string|null $only = null,
    ): null|string|array {

        // verify the required parameter 'q' is set
        if ($q === null || (is_array($q) && count($q) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $q when calling search'
            );
        }


        $resourcePath = '/search';
        $queryParams = [];
        $headers = [];
        $options = [];

        if ($q !== null) {
            $queryParams['q'] = $q;
        }
        if ($exclude !== null) {
            $queryParams['exclude'] = $exclude;
        }
        if ($only !== null) {
            $queryParams['only'] = $only;
        }






        if (!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("GET", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

}
