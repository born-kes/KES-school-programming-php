<?php
/**
 * Created by PhpStorm.
 * User: Monika&Łukasz
 * Date: 2018-09-26
 * Time: 17:18
 */

namespace BasicDefault;


class DefaultBasicData implements Access
{
    /**
     * @var Basic
     */
    private $obj;

    /**
     * Konstruktor Class, przyjmuje object Basic i na nim działa
     *
     *
     * @param Basic $obj
     */
    public function __construct ($obj)
    {

        $this->obj = $obj;
    }

    /**
     * Zwraca parametr przechowywany w tablicy,
     * object dostarcza narzędzia.
     *
     * @param string $key - nazwa parametru z tablicy
     *
     * @return mixed
     */
    public function get ($key)
    {
        if(file_exists ($key)) {

            return (array) json_decode($this->obj->getFile($key), true);
        } else {
         $fileName = "page/$key.json";
         return (array) json_decode($this->obj->getFile($fileName), true);
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
        // TODO: Implement set() method.
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
        // TODO: Implement exists() method.
    }
}