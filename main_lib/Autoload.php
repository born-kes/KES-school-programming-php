<?php

namespace BasicAutoload;


class Autoload
{

private $path;

    public function __construct(string $path)
    {
        $this->path =  $path;
        spl_autoload_register((array)array($this, 'autoload'));

    }

    /**
     * @param $className
     * @return bool
     */
    protected function autoload($className)
    {
        $noPathClass = strstr($className, '\\');
        $class = $className;

        try{
            if (is_file($file = $this->path . $class . PHP) ||
                is_file($file = $this->path . $noPathClass . PHP)
//                is_file($file = $plugin . $class . PHP)
            )
            {
                require_once($file);
                return true;
            }
        } catch (Exception $e) {
//            var_dump('<h1>NIEMA</h1>',$className);
        }
    }
}

new Autoload(MAIN_LIB);
