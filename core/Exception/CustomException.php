<?php 

namespace Core\Exception;

use Exception; //extensão de Exception do php

class CustomException extends Exception {
    private $extra;

    public function __construct($message, $extra = "", $code = 0, Exception $previous = null) {
        $this->extra = $extra;
        parent::__construct($message, $code, $previous);
    }

    public function getExtra() {
        return $this->extra;
    }
}
