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
