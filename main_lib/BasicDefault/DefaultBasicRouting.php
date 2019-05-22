<?php

namespace BasicDefault;
/**
 * Class DefaultBasicRouting
 * method: ->get( $key )
 * ->set($key, $val)
 * ->put($key, $val)
 * ->exists($key, $val)
 *
 * @package BasicDefault
 */
class DefaultBasicRouting implements Routing {
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
     * Konstruktor Class, przyjmuje object Basic i na nim działa
     *
     *
     * @param Basic $obj
     */
    public function __construct (Basic $basic, $config = [])
    {
        $this->config = ConfigSettings::load($this->config, 'ConfigRouting', $config);
    }

	/**
	 * @return string $this->view
	 */
	public function __toString ()
	{
		return $this->view;
	}

    /**
     * Zwraca parametr przechowywany w tablicy,
     * object dostarcza narzędzia.
     *
     * @param string $key - nazwa parametru z tablicy
     *
     * @return mixed
     */
    public function get ( $key )
    {
        if (isset( $this->config[$key] )) {
            return $this->config[$key];
        } else {
            if ($key === '') {
                return $this->config;
            }
        }

        if(($tags = $this->obj->TAGS ( "{{--$key--}}" ))) {
            $config = $this->config;

            foreach ($tags[$key] as $tag) {

                if (isset( $config[$tag] )) {

                    $config = $config[$tag];

                } elseif (isset( $this->config[$tag] ) && isset( $config[$this->config[$tag]] )) {

                    $config = $config[$this->config[$tag]];

                } else {
//                    $config = null;
                }
            }
            $this->config[$key] = &$config;

            return $config;
        }
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
    public function set ($key, $val)
    {
        if ( $key == '' )
        {
            $this->config = $val;
            return;
        }
        else //if(isset( $this->config[$key] ) )
        {
            $this->config[$key] = $val;
            return;
        }
    }

    /**
     * Sprawdza czy parametr istneje i dodaje parametr do tabeli,
     * jeśli istnieje zagnieżdza go nie usuwając starego elementu
     *
     * @param string $key - nazwa parametru z tablicy
     * @param string $val - wartość ustawiona
     *
     * @return void
     */
    public function put ($key, $val)
    {
        // TODO: Implement put() method.
    }

    /**
     * Return TRUE if key parameter is set else return FALSE
     *
     * @param string $key
     * @param string|null $val
     *
     * @return bool
     */
    public function exists ($key, $val)
    {
        return ( isset( $this->config[$key] ) && isset( $this->config[$key][$val]) )
            ?true:false;
    }

    public function method()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $request = explode("/", substr(@$_SERVER['PATH_INFO'], 1));

        switch ($method) {
            case 'PUT':
                break;
            case 'POST':
                break;
            case 'GET':
                break;
            default:
                break;
        }

           $this->config['method'][$method] = true;
        return $method;
    }

    private function getParams ()
    {
        $this->config['param'] = isset($_GET['page'] )?
            $_GET['page']:0;
    }

}
