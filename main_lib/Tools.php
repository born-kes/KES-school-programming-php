<?php

namespace BasicDefault {

	/**
	 * @method DefaultBasicPageData PAGE_DATA()
	 * @method DefaultBasicRoutingNew Routing()
	 * @method DefaultBasicContent CONTENT()
	 * @method DefaultBasicData DATA()
	 * @method DefaultBasicView VIEW()
	 */
	class Tools
    {

        /**
         * @param $file
         *
         * @return string
         */
        public static function getFile($file)
        {
            if(file_exists($file. PHP) )
            {
                return file_get_contents($file. PHP);
            }
            return '';
        }

        public static function saveFile ($data, $file)
        {
            if(!is_string ( $data )) {
                $data = json_encode ( $data );
            }
//            if(!(file_exists ($file. PHP)) )
            file_put_contents($file . PHP, $data );
        }

        /**
         * @param $template
         * @param $content
         *
         * @return mixed
         */
        public function renderingTemplate( $template, $content )
        {

            $blocks = $this->searchedForTags($template);


            for($i=0; count($blocks[0])>$i;$i++)
            {


                if( isset($content[ $blocks[1][$i] ]) ) {
                    $str = is_array ($content[$blocks[1][$i]])?implode (" ", $content[$blocks[1][$i]]):$content[$blocks[1][$i]];

                    $template = str_replace ( $blocks[0][$i], $str, $template );
                } else {
                    $template = str_replace($blocks[0][$i], '', $template);
                }
            }

            return $template;

        }

        /**
         * @param        $string
         * @param string $regex
         *
         * @return array
         */
        public function searchedForTags( $string, $regex = '/\{\{--(\w+)--\}\}/' )
        {
            $blocks=array();
            preg_match_all($regex, $string, $blocks );
            return $blocks;
        }

        /**
         * Return array parameters from $str
         *
         * @param string $str
         * @param bool $empty
         *
         * @return array
         */
        public function split($str, $regex, $empty = FALSE)
        {
            return array_map('trim',
                preg_split($regex, $str, 0, $empty ? 0: PREG_SPLIT_NO_EMPTY)
            );
        }

        /**
         * @param $string
         *
         * @return bool
         */
        public function isJson($string) {
            return ((is_string($string) &&
                (is_object(json_decode($string)) ||
                    is_array(json_decode($string))))) ? true : false;
        }

        public function setClass ($key, $class)
        {
           return $this->runClass[$key] = $class;
        }
    }
}