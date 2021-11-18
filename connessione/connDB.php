<?php
function connDB($hn,$user,$pws,$schrma){
    $conn=new mysqli($hn,$user,$pws,$scherma);
    return $conn;
}
?>