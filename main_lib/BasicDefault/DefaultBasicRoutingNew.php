<?php

namespace BasicDefault;
/**
 * Class DefaultBasicRouting
 * method: ->get( $key )
 * ->set2($key, $val)
 * ->put($key, $val)
 * ->exists($key, $val)
 *
 * @package BasicDefault
 */
class DefaultBasicRoutingNew implements Access, \Routing {
    private $config = [
        'page' => [],
        'param'=> 0,
        /** https://tools.ietf.org/html/rfc7231#section-4  */
        'method' => [
            'PUT' => false,
            'GET' => false,
            'POST' => false,
            'DELETE' => false
            ]
    ];
    /**
     * @var Basic
     */
    private $tools;
	private $url;
	private $method;
	private $params;

	/**
     * Konstruktor Class, przyjmuje object Basic i na nim działa
     *
     *
     * @param Basic $obj
     */
    public function __construct ($obj)
    {
    	$serverURL = defined('SERVER_URL')?SERVER_URL:$obj->get('SERVER_URL');
    	$pageUrl = @$_SERVER['REQUEST_URI'];
	    $pageMethod = $_SERVER['REQUEST_METHOD'];


    	$this->tools = $obj;
	    $this->method = $pageMethod;
    	$this->url = $this->clineURL( $serverURL, $pageUrl );
	    $this->params =  $this->createTableParams();
	    $this->params['_page_'] = $this->getParam('page');
    }

	public function __toString ()
	{
		ob_start();
		echo '<pre>';
		var_export ($this->params);
		echo '</pre>';

		return ob_get_clean();
	}

    public function method()
    {
    	return $this->method;
    }

	/**
	 * @param $key string
	 *
	 * @return int|string
	 */
	public function get($key)
    {
    	return isset($this->params[$key])?$this->params[$key]:null;
    }

    public function put($key, $val){
	    $this->params[$key] = $val;
	    isset($this->params[$key])?$this->params[$key]:$val;
    }

    private function getParam ($key=null)
    {
	    if ( !isset ($key) ) {
    		return $this->url;
	    }

        return isset($_GET[$key])?
            $_GET[$key]:0;
    }

	private function clineURL($serverURL, $url='')
	{
		if($i = strpos($url, "?") )
			$url = substr ($url,0, $i);

		$url = str_replace (  $serverURL, '', $url );

		return $url;
	}
	private function createTableParams()
	{

		$param = array_filter(explode('/',$this->url), function($a){return $a!=='';} );

    	if ( count ($_GET) > 0 )  $param['GET'] = $_GET;
//todo    	if ( count ($_POST) >0 && $this->method == '_POST' ) $param['POST'] = $_POST;

		return $param;
	}

    /**
     * Ustawianie parametru przechowywanego w tabeli
     *
     * @param Basic $object - zestaw narzędzi
     * @param string $key - nazwa parametru z tablicy
     * @param string $val - wartość ustawiona
     *
     * @return void
     */
    public function set($key, $val)
    {
        // TODO: Implement set() method.
    }

    /**
     * Return TRUE if key parameter is set else return FALSE
     *
     * @param string $key
     * @param string|null $val
     *
     * @return bool
     */
    public function exists($key, $val)
    {
        // TODO: Implement exists() method.
    }
}
