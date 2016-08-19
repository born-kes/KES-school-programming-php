<?php

interface access
{
    /**
     * access constructor.
     * Sets the action based on the config, or default
     *
     * @param $config
     */
    public function __construct($config);

    /**
     * Returns the stored parameter of the table
     *
     * @param string $key
     *
     * @return mixed
     */
    public function get( $key );

    /**
     * Set the parameter stored in the table
     *
     * @param string $key
     * @param string $val
     *
     * @return void
     */
    public function set( $key, $val );

    /**
     * Return TRUE if key parameter is set
     *
     * @param string $key
     * @param string|null $val
     *
     * @return bool
     */
    public function exists( $key, &$val = NULL );

    /**
     * Return array parameters from url
     *
     * @param string $url
     * @param array $params
     *
     * @return array
     */
    public function build( $url, $params = array() );

    /**
     * Return array parameters from $str
     *
     * @param string $str
     * @param bool $empty
     *
     * @return array
     */
    public function split( $str, $empty = FALSE );

}

/**
 * Class descriptionHeder
 * Response HTTP status and the HTTP response headers
 */
class descriptionHeader {

    /**
     * Response HTTP status codes and Reason Phrase(RFC 2616 - W3C)
     * https://www.w3.org/Protocols/rfc2616/rfc2616-sec6.html#sec6.1.1
     */
    const
        HTTP_100 = 'Continue',
        HTTP_101 = 'Switching Protocols',
        HTTP_200 = 'OK',
        HTTP_201 = 'Created',
        HTTP_202 = 'Accepted',
        HTTP_203 = 'Non-Authoritative Information',
        HTTP_204 = 'No Content',
        HTTP_205 = 'Reset Content',
        HTTP_206 = 'Partial Content',
        HTTP_300 = 'Multiple Choices',
        HTTP_301 = 'Moved Permanently',
        HTTP_302 = 'Found',
        HTTP_303 = 'See Other',
        HTTP_304 = 'Not Modified',
        HTTP_305 = 'Use Proxy',
        HTTP_307 = 'Temporary Redirect',
        HTTP_400 = 'Bad Request',
        HTTP_401 = 'Unauthorized',
        HTTP_402 = 'Payment Required',
        HTTP_403 = 'Forbidden',
        HTTP_404 = 'Not Found',
        HTTP_405 = 'Method Not Allowed',
        HTTP_406 = 'Not Acceptable',
        HTTP_407 = 'Proxy Authentication Required',
        HTTP_408 = 'Request Time-out',
        HTTP_409 = 'Conflict',
        HTTP_410 = 'Gone',
        HTTP_411 = 'Length Required',
        HTTP_412 = 'Precondition Failed',
        HTTP_413 = 'Request Entity Too Large',
        HTTP_414 = 'Request-URI Too Large',
        HTTP_415 = 'Unsupported Media Type',
        HTTP_416 = 'Requested Range Not Satisfiable',
        HTTP_417 = 'Expectation Failed',
        HTTP_500 = 'Internal Server Error',
        HTTP_501 = 'Not Implemented',
        HTTP_502 = 'Bad Gateway',
        HTTP_503 = 'Service Unavailable',
        HTTP_504 = 'Gateway Time-out',
        HTTP_505 = 'HTTP Version Not Supported';

    const
        // request methods PHP globals
        GLOBALS='GET|POST|COOKIE|REQUEST|SESSION|FILES|SERVER|ENV',
        // request methods HTTP
        VERBS='GET|HEAD|POST|PUT|PATCH|DELETE|CONNECT';

    /**
     * The HTTP response headers
     * https://developer.mozilla.org/en-US/docs/Web/HTTP/Access_control_CORS#The_HTTP_response_headers
     * https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers
     * https://developer.mozilla.org/en-US/docs/Web/HTTP/Caching
     */
    const
        CONTENR_LANGUAGE = 'Content-Language:', //  en, pl
        CONTENT_LEBGTH = 'Content-Length: ', // strlen($html)
        ACCESS_ORIGIN = 'Access-Control-Allow-Origin: ', // <origin> | *
        ACCESS_EXPOSE = 'Access-Control-Expose-Headers: ', // X-My-Custom-Header, X-Another-Custom-Header
        ACCESS_MAX = 'Access-Control-Max-Age: ', // <delta-seconds> 86400
        ACCESS_CREDENTIALS = 'Access-Control-Allow-Credentials: ', //true | false
        ACCESS_METHODS = 'Access-Control-Allow-Methods: ', // POST, GET, OPTIONS
        ACCESS_HEADERS = 'Access-Control-Allow-Headers: ',// X-PINGOTHER, Content-Type'

        ACCESS_REQUEST_METHODS = 'Access-Control-Request-Method: ', // POST | GET
        ACCESS_REQUEST_HEADERS = 'Access-Control-Request-Headers: ', // X-PINGOTHER, Content-Type'
        ORGIN = 'Origin: <origin>',

        CACHE_CONTROL = 'Cache-Control: ', // no-store | no-cache | must-revalidate | private | public | max-age=<seconds> | must-revalidate',
        /*
         * HTTP conditional requests
         * https://developer.mozilla.org/en-US/docs/Web/HTTP/Conditional_requests
         */
        IF_MATCH = 'If-Match: ',
        IF_NONE_MATCH = 'If-None-Match: ',
        IF_MODIFIED_SINCE = 'If-Modified-Since: ',
        IF_UNMOSIDIED_SINCE = 'If-Unmodified-Since: ',
        IF_RANGE = 'If-Range: ';

    private $languages = 'pl';
}
