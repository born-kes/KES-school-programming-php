<?php

/**
 * Default
 */
namespace BasicDefault;
use BasicAutoload\Autoload ;


if (!defined('PHP'))
{
    include('Definition.php');
    include('interface.php');
    include('Tools.php');
}


/**
 * Class Basic
 *
// *  @method mixed get( $key )
// *  @method void set($key, $val)
// *  @method void put($key, $val)
// *  @method bool exists($key, $val)
 */
class Basic
{
    private $settings = [
        'TEST_TIME'      => false,

        'ROUTING'        => [
            'name'=>'BasicDefault\DefaultBasicRouting',
            'config'=>[
                'SERVER_URL'           => '/programming-science/',
                ],
        ],
        'CONTENT'       => [
            'name'=>'BasicDefault\DefaultBasicContent',
        ],
        'VIEW'          => [
            'name'=>'BasicDefault\DefaultBasicView',
            'config'=>[
                'TEMPLATE'      => 'front-end/template/default.page.html5.tpl',
                'TAG_REG'       => '/\{\{--(.*)--\}\}/',    // {{--body--}}
                'TAG_FUNCTION'  => '/([=.;\r])/',             // wiget.hello
            ]
        ],

        'DATA'          => [
            'name'=>'BasicDefault\DefaultBasicData',
        ],
        'PAGE_DATA'          => [
            'name'=>'BasicDefault\DefaultBasicPageData',
        ],
        'TAGS'          => [
            'name'=>'BasicDefault\DefaultBasicTags',
        ],
    ];
    /**
     * Basic constructor.
     * @param array $config
     */
    public function __construct($config = [])
    {
        include ('Autoload.php');
        $this->settings = ConfigSettings::load($this->settings, 'BasicConfig', $config);

        $DataPage = new DefaultBasicPageData('hello 1');
        $DataPage1 = new DefaultBasicPageData('Willa s1');
        $DataPage2 = new DefaultBasicPageData('Łukasz zz');

return;
        $this->Routing();
        $this->Model();
        $this->View();
    }

    private function Routing( )
    {

       return new $this->settings['ROUTING']['name']  ($this);

        /** @var DefaultBasicRouting $r TYPE_NAME */
        $r = $this->generatorClass('ROUTING');
        e($r);
        die;
       return $r;
    }
    private function ClassExist(string $name){
        return isset($class['name']);
    }

    private function generatorClass(string $name){
        if(!$this->ClassExist($name))
        {
            $className = $this->settings[ $name ]['name'];
            $classConfig = $this->settings[ $name ]['config']|[];
            $newClass = new $className($this, $classConfig);
            $test = "Type{$name}";
            e(
                 ucwords(strtolower($name))
            );
            e(1
//                $newClass instanceof ( ucwords(strtolower($name))  )
            );
            if( $this->$test($newClass)  )

            return $newClass;
        }

    }

    private function TypeROUTING($class){
        return ($class instanceof Routing);
    }

}


function e($a){
    echo '<pre>';
    var_dump($a);
    echo '</pre>';
}
