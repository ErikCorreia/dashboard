<?php

namespace Core;

use SimpleXMLIterator;

class Module
{
    protected $modules = [];

    public function __construct()
    {
        // (A) GET FILES/FOLDERS
        $dir = __DIR__.'/../admin/Modules';
        $folders = array_diff(scandir($dir), [".", ".."]);
        
        // (B) LOOP THROUGH folders
        foreach ($folders as $ff) {
            $this->load($dir.'/'.$ff);
        }
     
    }

    public function load($path)
    {

        $xml =  $path.'/module.xml';

        if (file_exists($xml)) {

            $xmlData = new SimpleXMLIterator(file_get_contents($xml));
            
            // Convert into json
            $con = json_encode($xmlData);
            
            // Convert into associative array
            $newArr = json_decode($con, true);

            array_push($this->modules, $newArr);

        }
    }

    public function getModule($key)
    {
        if (isset($this->modules[$key])) {
            return $this->modules[$key];
        }
    }
    public function setModule($key, $module)
    {
        $this->modules[$key] = $module;
    }
}
