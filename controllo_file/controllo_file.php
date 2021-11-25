<?php
echo '<form action=""esistenza_creazione_file.php" method="POST">
path<input type="text" name="input"></br>
nome del file<input type="text" name="nfile"></br>
testo<input type="text-area" name="area"></br>
<input type="submit" values="invio">
</form>';
if(!empty($_POST['input'])){
include "esistenza_creazione_file.php";
echo controllo($_POST['input'],$_POST['nfile'],$_POST['area']);
}
?>