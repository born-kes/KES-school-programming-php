<?php

define("PHP", ".php");
define("MAIN_LIB", "back-end/");
define("TEMPLATE", "front-end/template");
//define("FILE", dirname( __FILE__ ) . '\\' );

/** USER */

define("USER_NOT_LOGGED", 0);


/**
 * Response HTTP status codes and Reason Phrase(RFC 2616 - W3C)
 * https://www.w3.org/Protocols/rfc2616/rfc2616-sec6.html#sec6.1.1
 */
define("HTTP_100", 'Continue');
define("HTTP_101", 'Switching Protocols');
define("HTTP_200", 'OK');
define("HTTP_201", 'Created');
define("HTTP_202", 'Accepted');
define("HTTP_203", 'Non-Authoritative Information');
define("HTTP_204", 'No Content');
define("HTTP_205", 'Reset Content');
define("HTTP_206", 'Partial Content');
define("HTTP_300", 'Multiple Choices');
define("HTTP_301", 'Moved Permanently');
define("HTTP_302", 'Found');
define("HTTP_303", 'See Other');
define("HTTP_304", 'Not Modified');
define("HTTP_305", 'Use Proxy');
define("HTTP_307", 'Temporary Redirect');
define("HTTP_400", 'Bad Request');
define("HTTP_401", 'Unauthorized');
define("HTTP_402", 'Payment Required');
define("HTTP_403", 'Forbidden');
define("HTTP_404", 'Not Found');
define("HTTP_405", 'Method Not Allowed');
define("HTTP_406", 'Not Acceptable');
define("HTTP_407", 'Proxy Authentication Required');
define("HTTP_408", 'Request Time-out');
define("HTTP_409", 'Conflict');
define("HTTP_410", 'Gone');
define("HTTP_411", 'Length Required');
define("HTTP_412", 'Precondition Failed');
define("HTTP_413", 'Request Entity Too Large');
define("HTTP_414", 'Request-URI Too Large');
define("HTTP_415", 'Unsupported Media Type');
define("HTTP_416", 'Requested Range Not Satisfiable');
define("HTTP_417", 'Expectation Failed');
define("HTTP_500", 'Internal Server Error');
define("HTTP_501", 'Not Implemented');
define("HTTP_502", 'Bad Gateway');
define("HTTP_503", 'Service Unavailable');
define("HTTP_504", 'Gateway Time-out');
define("HTTP_505", 'HTTP Version Not Supported');


/**
 * The HTTP response headers
 * https://developer.mozilla.org/en-US/docs/Web/HTTP/Access_control_CORS#The_HTTP_response_headers
 * https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers
 * https://developer.mozilla.org/en-US/docs/Web/HTTP/Caching
 */
define("CONTENR_LANGUAGE", 'Content-Language:'); //  en, pl
define("CONTENT_LEBGTH", 'Content-Length: '); // strlen($html)
define("ACCESS_ORIGIN", 'Access-Control-Allow-Origin: '); // <origin> | *
define("ACCESS_EXPOSE", 'Access-Control-Expose-Headers: '); // X-My-Custom-Header, X-Another-Custom-Header
define("ACCESS_MAX", 'Access-Control-Max-Age: '); // <delta-seconds> 86400
define("ACCESS_CREDENTIALS", 'Access-Control-Allow-Credentials: '); //true | false
define("ACCESS_METHODS", 'Access-Control-Allow-Methods: '); // POST, GET, OPTIONS
define("ACCESS_HEADERS", 'Access-Control-Allow-Headers: '); // X-PINGOTHER, Content-Type'

define("ACCESS_REQUEST_METHODS", 'Access-Control-Request-Method: '); // POST | GET
define("ACCESS_REQUEST_HEADERS", 'Access-Control-Request-Headers: '); // X-PINGOTHER, Content-Type'
define("ORGIN", 'Origin: <origin>');
define("CACHE_CONTROL", 'Cache-Control: '); // no-store | no-cache | must-revalidate | private | public | max-age=<seconds> | must-revalidate',
/*
* HTTP conditional requests
* https://developer.mozilla.org/en-US/docs/Web/HTTP/Conditional_requests
*/
define("IF_MATCH", 'If-Match: ');
define("IF_NONE_MATCH", 'If-None-Match: ');
define("IF_MODIFIED_SINCE", 'If-Modified-Since: ');
define("IF_UNMOSIDIED_SINCE", 'If-Unmodified-Since: ');
define("IF_RANGE", 'If-Range: ');