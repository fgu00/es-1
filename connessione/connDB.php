<?php
function connDB($hn,$user,$pws,$schrma){
    echo "esiste";
    $conn=new mysqli($hn,$user,$pws,$scherma);
    return $conn;
}
?>