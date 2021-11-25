<?php
echo '<form action="controllo_file.php" method="POST">
path<input type="text" name="input"></br>
nome del file<input type="text" name="nfile"></br>
<input type="submit" values="invio">
</form>';
if(!empty($_POST['input'])){
$path=$_POST['input'];
$nfile=$_POST['nfile'];
$completo=$path."/".$nfile;
if(file_exists($completo)){
    echo "file trovato";
}else{
    echo "file inesistente";
    $file=fopen($completo,"w");
}
}
?>