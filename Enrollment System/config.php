<?php
    $databasehost = 'localhost';
    $dbusername = 'root';
    $dbpassword = '';
    $databasename = 'db_enrollment';

    $conn = new mysqli($databasehost, $dbusername, $dbpassword, $databasename);
        if($conn -> connect_error){
            die ("Connection Failed!".$conn->connect_error);
        }
        echo "";
?>