<?php

function CreateSchemas() {
  $ObjDB = new MySQLiDB();
  $ObjDB->do_ins_query(SQLDefs('Markers'));
  $ObjDB->do_close();
  unset($ObjDB);
}

function SQLDefs($ObjectName) {
  $SqlDB = '';
  switch ($ObjectName) {
    case 'Markers':
      $SqlDB = 'CREATE TABLE IF NOT EXISTS `' . MySQL_Pre . $ObjectName . '` ('
              . '`MarkerID` int(11) NOT NULL AUTO_INCREMENT,'
              . '`MarkerType` int(11) NOT NULL,'
              . '`Lat` decimal(10,8) NOT NULL,'
              . '`Lng` decimal(10,8) NOT NULL,'
              . '`Title` varchar(50) NOT NULL,'
              . '`Remarks` varchar(200) NOT NULL,'
              . 'PRIMARY KEY (`MarkerID`)'
              . ') ENGINE=InnoDB  DEFAULT CHARSET=utf8;';
      break;
  }
  return $SqlDB;
}

?>
