<?php
/**
 * IAVApi
 * PHP version 5
 *
 * @category Class
 * @package  com\hydrogen\integration
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Hydrogen Integration API
 *
 * The Hydrogen Integration API
 *
 * OpenAPI spec version: 1.3.1
 * Contact: info@hydrogenplatform.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace com\hydrogen\integration\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use com\hydrogen\integration\ApiException;
use com\hydrogen\integration\Configuration;
use com\hydrogen\integration\HeaderSelector;
use com\hydrogen\integration\ObjectSerializer;

/**
 * IAVApi Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\integration
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IAVApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation createIAVUsingPost
     *
     * Instant Account Verification of an account.
     *
     * @param  \com\hydrogen\integration\Model\IavRequestCO $iav_request_co iavRequestCO (required)
     *
     * @throws \com\hydrogen\integration\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com\hydrogen\integration\Model\IavResponseVo
     */
    public function createIAVUsingPost($iav_request_co)
    {
        list($response) = $this->createIAVUsingPostWithHttpInfo($iav_request_co);
        return $response;
    }

    /**
     * Operation createIAVUsingPostWithHttpInfo
     *
     * Instant Account Verification of an account.
     *
     * @param  \com\hydrogen\integration\Model\IavRequestCO $iav_request_co iavRequestCO (required)
     *
     * @throws \com\hydrogen\integration\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com\hydrogen\integration\Model\IavResponseVo, HTTP status code, HTTP response headers (array of strings)
     */
    public function createIAVUsingPostWithHttpInfo($iav_request_co)
    {
        $returnType = '\com\hydrogen\integration\Model\IavResponseVo';
        $request = $this->createIAVUsingPostRequest($iav_request_co);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\hydrogen\integration\Model\IavResponseVo',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createIAVUsingPostAsync
     *
     * Instant Account Verification of an account.
     *
     * @param  \com\hydrogen\integration\Model\IavRequestCO $iav_request_co iavRequestCO (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createIAVUsingPostAsync($iav_request_co)
    {
        return $this->createIAVUsingPostAsyncWithHttpInfo($iav_request_co)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createIAVUsingPostAsyncWithHttpInfo
     *
     * Instant Account Verification of an account.
     *
     * @param  \com\hydrogen\integration\Model\IavRequestCO $iav_request_co iavRequestCO (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createIAVUsingPostAsyncWithHttpInfo($iav_request_co)
    {
        $returnType = '\com\hydrogen\integration\Model\IavResponseVo';
        $request = $this->createIAVUsingPostRequest($iav_request_co);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createIAVUsingPost'
     *
     * @param  \com\hydrogen\integration\Model\IavRequestCO $iav_request_co iavRequestCO (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createIAVUsingPostRequest($iav_request_co)
    {
        // verify the required parameter 'iav_request_co' is set
        if ($iav_request_co === null || (is_array($iav_request_co) && count($iav_request_co) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $iav_request_co when calling createIAVUsingPost'
            );
        }

        $resourcePath = '/iav';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($iav_request_co)) {
            $_tempBody = $iav_request_co;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation deleteBankLinkUsingDelete
     *
     * De-Link mapping between client,vendor,tenant
     *
     * @param  string $nucleus_bank_link_id nucleus_bank_link_id (required)
     * @param  string $delete_type delete_type (optional, default to delink)
     * @param  string $nucleus_data nucleus_data (optional)
     *
     * @throws \com\hydrogen\integration\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteBankLinkUsingDelete($nucleus_bank_link_id, $delete_type = 'delink', $nucleus_data = null)
    {
        $this->deleteBankLinkUsingDeleteWithHttpInfo($nucleus_bank_link_id, $delete_type, $nucleus_data);
    }

    /**
     * Operation deleteBankLinkUsingDeleteWithHttpInfo
     *
     * De-Link mapping between client,vendor,tenant
     *
     * @param  string $nucleus_bank_link_id nucleus_bank_link_id (required)
     * @param  string $delete_type delete_type (optional, default to delink)
     * @param  string $nucleus_data nucleus_data (optional)
     *
     * @throws \com\hydrogen\integration\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteBankLinkUsingDeleteWithHttpInfo($nucleus_bank_link_id, $delete_type = 'delink', $nucleus_data = null)
    {
        $returnType = '';
        $request = $this->deleteBankLinkUsingDeleteRequest($nucleus_bank_link_id, $delete_type, $nucleus_data);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation deleteBankLinkUsingDeleteAsync
     *
     * De-Link mapping between client,vendor,tenant
     *
     * @param  string $nucleus_bank_link_id nucleus_bank_link_id (required)
     * @param  string $delete_type delete_type (optional, default to delink)
     * @param  string $nucleus_data nucleus_data (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteBankLinkUsingDeleteAsync($nucleus_bank_link_id, $delete_type = 'delink', $nucleus_data = null)
    {
        return $this->deleteBankLinkUsingDeleteAsyncWithHttpInfo($nucleus_bank_link_id, $delete_type, $nucleus_data)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteBankLinkUsingDeleteAsyncWithHttpInfo
     *
     * De-Link mapping between client,vendor,tenant
     *
     * @param  string $nucleus_bank_link_id nucleus_bank_link_id (required)
     * @param  string $delete_type delete_type (optional, default to delink)
     * @param  string $nucleus_data nucleus_data (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteBankLinkUsingDeleteAsyncWithHttpInfo($nucleus_bank_link_id, $delete_type = 'delink', $nucleus_data = null)
    {
        $returnType = '';
        $request = $this->deleteBankLinkUsingDeleteRequest($nucleus_bank_link_id, $delete_type, $nucleus_data);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'deleteBankLinkUsingDelete'
     *
     * @param  string $nucleus_bank_link_id nucleus_bank_link_id (required)
     * @param  string $delete_type delete_type (optional, default to delink)
     * @param  string $nucleus_data nucleus_data (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteBankLinkUsingDeleteRequest($nucleus_bank_link_id, $delete_type = 'delink', $nucleus_data = null)
    {
        // verify the required parameter 'nucleus_bank_link_id' is set
        if ($nucleus_bank_link_id === null || (is_array($nucleus_bank_link_id) && count($nucleus_bank_link_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $nucleus_bank_link_id when calling deleteBankLinkUsingDelete'
            );
        }

        $resourcePath = '/iav/{nucleus_bank_link_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($delete_type !== null) {
            $queryParams['delete_type'] = ObjectSerializer::toQueryValue($delete_type);
        }
        // query params
        if ($nucleus_data !== null) {
            $queryParams['nucleus_data'] = ObjectSerializer::toQueryValue($nucleus_data);
        }

        // path params
        if ($nucleus_bank_link_id !== null) {
            $resourcePath = str_replace(
                '{' . 'nucleus_bank_link_id' . '}',
                ObjectSerializer::toPathValue($nucleus_bank_link_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getIAVUsingGet
     *
     * Get verified account based on id.
     *
     * @param  string $nucleus_bank_link_id nucleus_bank_link_id (required)
     *
     * @throws \com\hydrogen\integration\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com\hydrogen\integration\Model\IavResponseVo
     */
    public function getIAVUsingGet($nucleus_bank_link_id)
    {
        list($response) = $this->getIAVUsingGetWithHttpInfo($nucleus_bank_link_id);
        return $response;
    }

    /**
     * Operation getIAVUsingGetWithHttpInfo
     *
     * Get verified account based on id.
     *
     * @param  string $nucleus_bank_link_id nucleus_bank_link_id (required)
     *
     * @throws \com\hydrogen\integration\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com\hydrogen\integration\Model\IavResponseVo, HTTP status code, HTTP response headers (array of strings)
     */
    public function getIAVUsingGetWithHttpInfo($nucleus_bank_link_id)
    {
        $returnType = '\com\hydrogen\integration\Model\IavResponseVo';
        $request = $this->getIAVUsingGetRequest($nucleus_bank_link_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\hydrogen\integration\Model\IavResponseVo',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getIAVUsingGetAsync
     *
     * Get verified account based on id.
     *
     * @param  string $nucleus_bank_link_id nucleus_bank_link_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getIAVUsingGetAsync($nucleus_bank_link_id)
    {
        return $this->getIAVUsingGetAsyncWithHttpInfo($nucleus_bank_link_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getIAVUsingGetAsyncWithHttpInfo
     *
     * Get verified account based on id.
     *
     * @param  string $nucleus_bank_link_id nucleus_bank_link_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getIAVUsingGetAsyncWithHttpInfo($nucleus_bank_link_id)
    {
        $returnType = '\com\hydrogen\integration\Model\IavResponseVo';
        $request = $this->getIAVUsingGetRequest($nucleus_bank_link_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getIAVUsingGet'
     *
     * @param  string $nucleus_bank_link_id nucleus_bank_link_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getIAVUsingGetRequest($nucleus_bank_link_id)
    {
        // verify the required parameter 'nucleus_bank_link_id' is set
        if ($nucleus_bank_link_id === null || (is_array($nucleus_bank_link_id) && count($nucleus_bank_link_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $nucleus_bank_link_id when calling getIAVUsingGet'
            );
        }

        $resourcePath = '/iav/{nucleus_bank_link_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($nucleus_bank_link_id !== null) {
            $resourcePath = str_replace(
                '{' . 'nucleus_bank_link_id' . '}',
                ObjectSerializer::toPathValue($nucleus_bank_link_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
