<?php
echo "<form method='POST'>
inserisci un numero <input type='number' name='numero'>
<input type='submit'>
</form>";
if(!empty($_POST)){
if($_COOKIE['conto']!=0){
$numero=$_COOKIE['conto'];
}else{
  $numero=0;  
}
setcookie("$numero",$_POST['numero']);
$numero++;
setcookie("conto",$numero);
if($numero==1){
$max=$_POST['numero'];
$min=$_POST['numero'];
echo $_POST['numero'];
echo $min;
echo "gg";
}else{
    $max=$_COOKIE['max'];
    $min=$_COOKIE['min'];   
    echo "ii";
}
for($n=0;$n<$numero;$n++){
    echo $n."</br>";
    $val=$_COOKIE["$n"];
    $tot=$tot+$val;
    if($val>$max){
       $max=$val;
       setcookie("max",$max);
    }
    if($min>$val){
        $min=$val;
        setcookie("min",$min);
    }

}
if($_POST['numero']>$max){
    $max=$val;
    setcookie("max",$max);
 }
 if($min>$_POST['numero']){
     $min=$val;
     setcookie("min",$min);
 }
$medio=$tot/$numero;

echo "totale ".$tot."</br>";
echo "media ".$medio."</br>";
echo "minimo ".$min."</br>";
echo "massimo ".$max."</br>";

echo " <form method='POST'>
<input type='submit' name='pulsante'>
</form>";
if($_POST['pulsante']==true){
    echo $n."</br>";
    for($n=0;$n<$numero-1;$n++){
        setcookie("$n");  
    }
    setcookie("conto");
    setcookie("max");
    setcookie("min");
}
}
?>