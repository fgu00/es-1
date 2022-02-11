<?php
function connDB2 ($hn,$user,$pws,$schrma){
    $conn=new mysqli($hn,$user,$pws,$scherma);
    return $conn;
}
?>