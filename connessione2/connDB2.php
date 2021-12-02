<?php
function connDB2($hn,$user,$pws,$schrma){
    echo "esiste";
    $conn=new mysqli($hn,$user,$pws,$scherma);
    return $conn;
}
?>