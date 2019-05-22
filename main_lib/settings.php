<?php
 defined("PHP") or die('HTTP/1.0 404 Not Found');
//var_dump($_SERVER);
return [
    'ROUTING'        => 'BasicDefault\DefaultBasicRouting',
    'ROUTING_CONFIG' =>[],

    'CONTENT'       => 'BasicDefault\DefaultBasicContent',
    'CONTENT_CONFIG'=>[],

//    'FILE'          =>'',
//    'FILE_CONFIG'   =>'',

    'VIEW'          => 'BasicDefault\DefaultBasicView',
    'VIEW_CONFIG'   => [],

    'TEMPLATE'      => TEMPLATE.'/default.page.html5.tpl',

//    'BLOCKS'        => array(),

//    'AUTOLOAD'      => '.\\',
//    'PLUGINS'       => (__DIR__).  '\\',
    'URL'           => @$_SERVER['REQUEST_URI'],
    'VERSION'       => "0.1.1"

    ];