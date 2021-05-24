<?php
    function connect_database($connect){
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "project";

        $connect = mysqli_connect($dbhost, $dbuser, $dbpass, $db) or die ("Error  Connecting to Database");

        return $connect;
    }

    function close_connection($x){
        mysqli_close($x);
    }
   
?>