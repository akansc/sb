<?php

require_once '../interface/interfaceDriver.php';

class driverMysql implements interfaceDriver {

    private $table, $mysql;

    public function __construct($host, $user, $pass, $db, $table) {
        $this->mysql = $mysqli_connect($host, $user, $pass, $db);
        $this->table = $this->mysql->real_escape_string($table);
    }

    public function log($data) {
        $data = $this->mysql > real_escape_string($data);
        $query = "INSERT INTO `{$this->table}` VALUES(`{$data}`)";
        return (bool) $this->mysql->query($query);
    }

}
