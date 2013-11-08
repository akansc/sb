<?php

require_once 'interface/interfaceDriver.php';

class driverFile implements interfaceDriver {

    private $file;

    public function __construct($file) {
        $this->file = $file['fileName'];
    }

    public function log($data) {
        return (bool) file_put_contents($this->file, $data . "\n", FILE_APPEND);
    }

}
