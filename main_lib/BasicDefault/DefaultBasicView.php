<?php

namespace BasicDefault;

/**
 * Class DefaultBasicView
 */
class DefaultBasicView implements Access {

    private $view ='';
    /**
     * Konstruktor Class, przyjmuje object Basic i na nim działa
     *
     *
     * @param Basic $object
     */
    public function __construct ($object)
    {
        $template = $object->getFile( $object->get('TEMPLATE') );


        $content = $object->PAGE_DATA()->fin();

        $this->set('view', $object->renderingTemplate($template, $content) );

    }

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
    public function get ($key)
    {
        return $this->view;
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
            $this->view = $val;
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

    public function textarea ($array = ['name"text"'])
    {
        return '<textarea '.(implode (" ", $array)).'></textarea>';
    }
}