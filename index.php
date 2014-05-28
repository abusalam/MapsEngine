<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

require_once __DIR__ . '/lib/lib.inc.php';

//WebLib::CreateDB();

$Data = new MySQLiDBHelper();
print_r($Data->get(MySQL_Pre . 'Markers'));
?>