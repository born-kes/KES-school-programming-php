<?php

namespace BasicDefault;

/**
 * Class DefaultBasicContent
 */
class DefaultBasicContent implements Access {
    private $config;

    /**
     * @param Basic $obj
     *
     */
    public function __construct ($obj)
    {
    	/**
        $this->config = array_merge(
        (array) $this->config,
        (array) $obj->get('CONTENT_CONFIG'),
        (array) $obj->DATA('CONTENT')
    );

	     *
        /** @var DefaultBasicPageData $page */
        list($page) = $obj->PAGE_DATA('_page_');

        /** @var DefaultBasicData $content */
        $content = $obj->DATA($page);

        foreach ($content as $key => $val) {

           if( $tags = $obj->TAGS($val) ) {
                 foreach ( $tags as $tag => $el) {
                     $str ='';
                     $obj->DATA($el[0]);
                   //  var_dump ($tag, $el);
                }
            }

//            if($val1 = $obj->searchedForTags($val, '/\{\{--(.*\w+)--\}\}/')) {
//                if( $this->isTag ($val1) || true) {
//
//                    foreach ($val1[1] as $tag) {
////                       $obj->run(  $obj->split($tag) );
//                        $val = $tag;
//                    }
//                    if (isset($val1[0][0]) && count($val1[0][0])>0) {
//                        $obj->PAGE_DATA($val1[0][0],'' );
//                    }
//                }
//
//
//            }

            $obj->PAGE_DATA($key, $val);
        }

    }

    public function get ($key)
    {
        // TODO: Implement get() method.
    }

    public function set ($key, $val)
    {
        // TODO: Implement set() method.
    }

    public function put ($key, $val)
    {
        // TODO: Implement put() method.
    }

     public function exists ($key, $val)
    {
        // TODO: Implement exists() method.
    }

    private function isTag ($val)
    {
        if(isset($val[0]) && isset($val[1]) ) {
            if( ( is_array($val[0]) && count($val[0])>0 ) && ( is_array($val[1]) && count($val[1])>0 ) )
            return true;
        }
        return false;

    }
}
