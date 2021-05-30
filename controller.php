<?php
    function connect_database(){
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "gait1542_gameinfo";

        $connect = mysqli_connect($dbhost, $dbuser, $dbpass, $db) or die ("Error  Connecting to Database");

        return $connect;
    }

    function close_connection($x){
        mysqli_close($x);
    }


    
?>