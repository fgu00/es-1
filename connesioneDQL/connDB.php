<?php
    function getPOST($servername, $username, $password, $nameDB){
        return new mysqli($servername, $username, $password, $nameDB);
    }
?>