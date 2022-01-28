<?php
echo "<form method='POST'>
inserisci un numero <input type='number' name='numero'>
<input type='submit'>
</form>";
$valore=$_COOKIE['login'];
echo $valore;
setcookie("numero",$_POST["numero"]."+".$valore);
$tot= $_POST["numero"].$valore; 
$array=explode("+",$tot);
$conto=count ($array);
for($n=0;$n<$conto;$n++){
    $totale=$array[$n]+$totale;
}
$medio=$totale/$conto;

echo "totale ".$totale."</br>";
echo "media ".$medio;

echo " <form method='POST'>
<input type='submit' name='pulsante'>
</form>";
if($_POST['pulsante']==true){
    setcookie("numero");
}

?>