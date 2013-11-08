<?php

require_once "class/classLogger.php";

//writting to 
$fileParams = array(
    'fileName' => 'file.log'
);

$logger = new classLogger('file', $fileParams);
$logger->log('rasom eilute');
unset($logger);


//mysql part
$mysqlParams = array(
    'host' => 'localhost',
    'user' => 'nfq-driver',
    'pass' => 'liepaeB9',
    'db' => 'nfq-driver',
    'table' => 'log'
);

$logger = new classLogger('mysql', $mysqlParams);
$logger->log('rasom eilute');
unset($logger);

