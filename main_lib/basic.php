<?php

interface Access {

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
    public function get($key);

    /**
     * Set the parameter stored in the table
     *
     * @param string $key
     * @param string $val
     *
     * @return void
     */
    public function set($key, $val);

    /**
     * Return TRUE if key parameter is set
     *
     * @param string $key
     * @param string|null $val
     *
     * @return bool
     */
    public function exists($key, &$val = NULL);

    /**
     * Return array parameters from url
     *
     * @param string $url
     * @param array $params
     *
     * @return array
     */
    public function build($url, $params = array());

    /**
     * Return array parameters from $str
     *
     * @param string $str
     * @param bool $empty
     *
     * @return array
     */
    public function split($str, $empty = FALSE);
}

/**
 * Class descriptionHeder
 * Response HTTP status and the HTTP response headers
 */
class DescriptionHeader {

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
            GLOBALS = 'GET|POST|COOKIE|REQUEST|SESSION|FILES|SERVER|ENV',
            // request methods HTTP
            VERBS = 'GET|HEAD|POST|PUT|PATCH|DELETE|CONNECT';

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
            ACCESS_HEADERS = 'Access-Control-Allow-Headers: ', // X-PINGOTHER, Content-Type'

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

    public $languages = 'pl';

}

/**
 * Class defaultTemplate
 */
class defaultTemplate implements Access {

    /**
     * @var string|array
     */
    private $heder = array(),
            $title = array(),
            $charset = 'UTF-8',
            $meta = array(
                'description' => array(),
                'keywords' => array(),
                'author' => '',
                'revised' => '' // data ostatniej aktualizacji
                    ),
            $link = array(
                array('rel' => "stylesheet", 'href' => "style.css"),
                    ),
            $style = array(),
            $body = array(),
            $header = array(
                array()
                    ),
            $nav = array(),
            $aside = array(),
            $section = array(),
            $article = array(),
            $footer = array();

    public function __construct($config) {
        parent::__construct($config);
    }

    public function get($key) {
        // TODO: Implement get() method.
    }

    public function set($key, $val) {
        // TODO: Implement set() method.
    }

    public function exists($key, &$val = null) {
        // TODO: Implement exists() method.
    }

    public function build($url, $params = array()) {
        // TODO: Implement build() method.
    }

    public function split($str, $empty = false) {
        // TODO: Implement split() method.
    }

    private function reg($reg, $str) {
        
    }

}

class Basic extends DescriptionHeader implements Access {

    private $settings;

    public function __construct($config) {

        $headers = array();

        foreach (array_keys($_SERVER) as $key)
            if (substr($key, 0, 5) == 'HTTP_')
                $headers[strtr(ucwords(strtolower(strtr(
                                                        substr($key, 5), '_', ' '))), ' ', '-')] = &$_SERVER[$key];

        $this->settings = [
            'BD' => 'defaultDB',
            'TEMPLATE' => $this->defaultTemplate(),
            'FTP' => 'defaultFtp',
            'RUTING' => FALSE,
            'AJAX' => FALSE,
            'TITLE' => NULL,
            'ALIAS' => NULL,
            'AUTOLOAD' => './',
            'BASE' => '',
            'BITMASK' => ENT_COMPAT,
            'BODY' => NULL,
            'CACHE' => FALSE,
            'CONFIG' => NULL,
            'DEBUG' => 0,
            'ENCODING' => 'UTF-8',
            'ERROR' => NULL,
            'ESCAPE' => NULL,
            'EXCEPTION' => NULL,
            'EXEMPT' => NULL,
            'FALLBACK' => NULL,
            'HALT' => FALSE,
            'HIGHLIGHT' => FALSE,
            'HOST' => $_SERVER['SERVER_NAME'],
            'IP' => NULL,
            'LANGUAGE' => isset($headers['Accept-Language']) ?
                    $headers['Accept-Language'] : $this->languages,
            'LOCALES' => './',
            'LOGS' => './',
            'ONERROR' => NULL,
            'PACKAGE' => [],
            'PARAMS' => [],
            'PATH' => '',
            'PATTERN' => NULL,
            'PLUGINS' => (__DIR__) . '/',
            'PORT' => '',
            'PREFIX' => NULL,
            'PREMAP' => '',
            'QUERY' => '',
            'QUIET' => FALSE,
            'RAW' => FALSE,
            'REALM' => $_SERVER['SERVER_NAME'] . ' ' . $_SERVER['REQUEST_URI'],
            'RESPONSE' => '',
            'ROOT' => $_SERVER['DOCUMENT_ROOT'],
            'ROUTES' => [],
            'SERIALIZER' => 'php',
            'TEMP' => 'tmp/',
            'TIME' => microtime(TRUE),
            'TZ' => @date_default_timezone_get(),
            'UI' => './',
            'UNLOAD' => NULL,
            'UPLOADS' => './',
            'URI' => &$_SERVER['REQUEST_URI'],
            'VERB' => &$_SERVER['REQUEST_METHOD'],
            'VERSION' => 0
        ];
        $this->settings = array_merge($this->settings, $config);
//        $this->settings += $config;
        // Register framework autoloader
        spl_autoload_register(array($this, 'autoload'));
    }

    public function get($key) {
        var_dump(class_exists("js\\view", false));
        return $test = new vi;

        ( preg_match_all('/[^|(\r)](\w+)[=.;]{1}(\w+)/', $key, $m, PREG_SET_ORDER) );
        return ( $m);
        //turn_array($m),
    }

    public function set($key, $val) {
        
    }

    public function exists($key, &$val = NULL) {
        
    }

    public function build($url, $params = array()) {
        
    }

    public function split($str, $empty = FALSE) {

        return array_map('trim', preg_split('/[=.;\r]/', $str, 0, !$empty ? PREG_SPLIT_NO_EMPTY : 0)
        );
    }

    public function defaultTemplate() {
        return '<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title></title>
    <script src="//localhost:35729/livereload.js"></script>
<body>
  <div>HELLO Word!</div>
';
    }

    static public function rel($url) {
        
    }

    /**
     * 	Convert backslashes to slashes
     * 	@return string
     * 	@param $str string
     * */
    function fixslashes($str) {
        return $str ? strtr($str, '\\', '/') : $str;
    }

    /**
     * 	Namespace-aware class autoloader
     * 	@return mixed
     * 	@param $class string
     * */
    protected function autoload($className) {
        try {
            if (class_exists($className)) {
                return;
            }

            $class = $this->fixslashes(ltrim($className, '\\'));
            $path = $this->settings['AUTOLOAD'];
            $plubins = $this->settings['PLUGINS'];

            if (is_file($file = $path . $class . '.php') || is_file($file = $plubins . $class . '.php')) {
                return require($file);
            }
        } catch (Exception $e) {
//            echo $e->getMessage()."\n";
        }
    }

}

class vi {

    public $ss = 0;

    public function __construct() {
        $this->ss++;
    }

    public function up() {
        $this->ss++;
    }

    public function get() {
        return $this->ss;
    }

    public function __clone() {
        return false;
    }

}

return new Basic($config);
