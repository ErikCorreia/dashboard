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
}
