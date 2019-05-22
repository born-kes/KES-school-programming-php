<?php

namespace BasicDefault;


class DefaultBasicTags implements Access
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
    public function __construct ( $obj)
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
        $reg = $this->obj->get('TAG_REG');

        if( $this->exists ($key, $reg ) ) {
            $tags = $this->obj->searchedForTags ( $key, $reg );

            if (!$this->existsBlock ( $tags )) {
                return false;
            }

            $this->data[$key] = $this->getTags($tags[1]);

            return $this->data[$key];
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

    public function exists ($key, $reg)
    {
//        var_dump ($key,preg_match($reg, $key) === 1 ) ;
        return (preg_match($reg, $key) === 1 ) ;
    }

    public function existsBlock($array)
    {
        if (count ( $array ) < 2 || count ( $array[1] ) == 0) {
            return false;
        }
        return true;
    }

    private function getTags ($tags)
    {
        $regTag = $this->obj->get ( 'TAG_FUNCTION' );
        $array = [];
        foreach ($tags as $tag) {
            if($this->exists ($tag, $regTag) ) {
                $array[$tag] = $this->obj->split ( $tag, $regTag );
            }
        }

        return count ( $array ) !== 0 ? $array : false;

    }
}