<?php



 function Getcity(){
$db=db_connect();
    return $db->table('Cities')
    ->get()
    ->getResultArray();
  }

?>