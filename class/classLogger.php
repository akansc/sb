<?php

class classLogger {
    private $driverClass;
    private $driver;
    
    public function __construct($driverClass, $params) {
        $this->driverClass = "driver" . ucfirst(strtolower($driverClass));
        require_once "driver/" . $this->driverClass . ".php";
        $this->driver = new $this->driverClass($params);
    }
    
    public function log($data) {
        
    }
}
