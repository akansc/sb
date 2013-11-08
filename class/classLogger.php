<?php

class classLogger {

    private $driverClass, $driver;

    public function __construct($driverClass, $params) {
        $this->driverClass = "driver" . ucfirst(strtolower($driverClass));
        require_once "driver/" . $this->driverClass . ".php";
        $this->driver = new $this->driverClass($params);
    }

    public function log($data) {
        if ($this->driver->log($data)) {
            echo "Written Successfully with driver: $this->driverClass";
        } else {
            echo "Error with driver: $this->driverClass";
        }
    }

}
