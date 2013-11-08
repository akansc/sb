<?php

require_once 'interface/interfaceDriver.php';

class driverMysql implements interfaceDriver {

    private $table, $mysql;

    public function __construct($params) {
        $this->mysql = mysqli_connect($params['host'], $params['user'], $params['pass'], $params['db']);
        $this->table = $this->mysql->real_escape_string($params['table']);
    }

    public function log($data) {
        $data = $this->mysql->real_escape_string($data);
        $query = "INSERT INTO `{$this->table}` VALUES('{$data}')";
        return (bool) $this->mysql->query($query);
    }

}
