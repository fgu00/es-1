<?php
    $pass;
    function getPOST($servername, $username, $password, $nameDB){
        $pass = $password;
        return new mysqli($servername, $username, $password, $nameDB);
    }
?>