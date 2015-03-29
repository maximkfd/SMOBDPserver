<?php
 
class DB_CONNECT {
 
    function __construct() {
        $this->connect();
    }
 
    function __destruct() {
        $this->close();
    }
 
    function connect() {
        require 'db_config.php';
 
        $con = mysql_connect('localhost', 'admin', 'password') or die(mysql_error());

        $db = mysql_select_db('devcolibri') or die(mysql_error()) or die(mysql_error());
 
        return $con;
    }

    function close() {
        mysql_close();
    }
 
}
 
?>