<?php

/**
 * Created by PhpStorm.
 * User: Programista
 * Date: 2016-08-21
 * Time: 16:22
 */
namespace js;
echo 'view';
class view
{
 public $ss =0;
    public function __construct()
    {
       $this->ss++;
    }
    public function up()
    {
       $this->ss++;
    }
    public function get()
    {
       return $this->ss;
    }

    public function __clone()
    {
        return false;
    }
}