<?php
function controllo($p,$n,$a){
$completo=$p."/".$n;
if(file_exists($completo)){
    echo "file trovato";
}else{
    echo "file inesistente";
    $file=fopen($completo,"w");
}
$file2=fwrite($file,$area);
fclose();
}
?>