<?php
require_once("../config/connection.php");

function show_elements($table, $row){
    $sql = "SELECT `$row` FROM `$table`;";
    foreach ($GLOBALS['DB'] -> query($sql) as $row => $value) {
         echo $value['txt']. "<br>";
    }
}

?>