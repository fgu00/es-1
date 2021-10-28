<?php
$nome="salvatore";
function associa($stato){
    global $nome;
    $str="<p>nome: $nome stato: $stato</p>";
    return $str;
}
//echo associa("molto stanco è venerdi pomeriggio");
?>