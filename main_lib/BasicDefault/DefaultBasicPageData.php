<?php
/**
 * Created by PhpStorm.
 * User: Monika&Łukasz
 * Date: 2018-09-20
 * Time: 14:57
 */

namespace BasicDefault;


class DefaultBasicPageData
{
    private $data = [
        "head"      =>  [],
        "body"      =>  [],
        "title"     => ["Demo"],
        "description"=> ["strona Demonstracyjna"],
        "keywords"  => ["Demo"],
        "menu"      => ["menu0"],
        "footer"    => [""]
    ];

    /**
     * Konstruktor Class, przyjmuje object Basic i na nim działa
     * PAGE_DATA by Routing
     *
     * @param Basic $object
     */
    public function __construct ($a)
    {
        $this->a = $a;
    }
    public function __toString ()
    {
        return $this->a;
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
        return isset( $this->data[$key] ) ? $this->data[$key] : null;
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
        $this->data[$key] = $val;
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
        if( isset($this->data[$key]) ) {
            $this->data[$key][] = $val;
        } else {
            $this->data[$key] = [$val];
        }

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

    public function fin(){
        return (array) $this->data;
    }


}