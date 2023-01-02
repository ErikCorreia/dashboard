<?php

namespace Core;

class Helper
{
    static function getAbloluteRootPath()
    {
        return $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].'/';
    }
    static function getRelativeRootPath()
    {
        return $_SERVER['DOCUMENT_ROOT'];
    }
    static function getRequestUri()
    {
        return $_SERVER['REQUEST_URI'];
    }
    
    static function isProd()
    {
                
        // is localhost
        if (in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ) ) ) {
            return false;
        }

        // is prod
        return true;
    }
}
