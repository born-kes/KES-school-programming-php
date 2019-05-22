<?php

namespace BasicDefault;
/**
 * Interface Routing
 *
 * co powinnien robić ruting
 * - pobierać listę przekierowań
 * - edytować listę przekierowań
 * - zapisać listę przekierowań
 *
 * - wybierać strategie
 * - wybierać view
 *
 */

interface Routing
{
    public function __construct (Basic $basic, $config = []);

    public function get($key);

    public function put($key, $val);
}

/**
 * Interface Access
 * @package BasicDefault
 *
 */
interface Access {

    /**
     * Konstruktor Class, przyjmuje object Basic i na nim działa
     *
     *
     * @param Basic $obj
     */
    public function __construct( $obj );

    /**
     * Zwraca parametr przechowywany w tablicy,
     * object dostarcza narzędzia.
     *
     * @param string $key - nazwa parametru z tablicy
     *
     * @return mixed
     */
    public function get($key);

    /**
     * Ustawianie parametru przechowywanego w tabeli
     *
     * @param Basic $object - zestaw narzędzi
     * @param string $key - nazwa parametru z tablicy
     * @param string $val - wartość ustawiona
     *
     * @return void
     */
    public function set($key, $val);

    /**
     * Sprawdza czy parametr istneje i dodaje parametr do tabeli,
     * jeśli istnieje zagnieżdza go nie usuwając starego elementu
     *
     * @param string $key - nazwa parametru z tablicy
     * @param string $val - wartość ustawiona
     *
     * @return void
     */
    public function put($key, $val);

    /**
     * Return TRUE if key parameter is set else return FALSE
     *
     * @param string $key
     * @param string|null $val
     *
     * @return bool
     */
    public function exists($key, $val);

}
