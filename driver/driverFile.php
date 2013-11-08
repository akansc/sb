<?php
require_once 'interface/interfaceDriver.php';

class driverFile implements interfaceDriver {
   private $file;
   
   public function __construct($file) {
       $this->file = $file;
   }

   public function log($data) {
       file_put_contents($this->file, $data);
   }
}
