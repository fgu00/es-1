<?php
echo "<form method='POST'>
inserisci un numero <input type='number' name='numero'>
<input type='submit'>
</form>";
if(!empty($_POST['numero'])){
if($_COOKIE['conto']!=0){
$numero=$_COOKIE['conto'];
echo $numero." conto 9"."</br>";
}else{
  $numero=0;  
  echo $numero." conto 12"."</br>";
}
if($_COOKIE['totale']==0){
    $tot=0;
}else{
    $tot=$_COOKIE['totale'];
}
setcookie("$numero",$_POST['numero']);
$numero++;
setcookie("conto",$numero);
if($numero==1){
    echo $numero." conto 18"."</br>";
$max=$_POST['numero'];
$min=$_POST['numero'];
echo $_POST['numero'];
echo $min;
echo "gg"."</br>";
}else{
    $max=$_COOKIE['max'];
    $min=$_COOKIE['min'];   
    echo "ii";
}
echo $numero." conto 29"."</br>";
for($n=0;$n<$numero;$n++){
    echo $numero." conto 31"."</br>";
    echo $n."</br>";
    $c=$n-1;
    $val=$_COOKIE["$n"];
    echo $val." val 35"."</br>";
    $tot=$tot+$val;
    setcookie("totale",$tot);
    echo $tot." totale 36"."</br>";
    if($val>$max){
       $max=$val;
       setcookie("max",$max);
    }
    if($min>=$val){
        echo $val."</br>";
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
}
echo " <form method='POST'>
<input type='submit' name='pulsante'>
</form>";
if($_POST['pulsante']==true){
    echo $n."</br>";
    for($n=0;$n<$numero;$n++){
        $c=$n-1; 
        setcookie("$n");  
    }
    setcookie("conto");
    setcookie("max");
    setcookie("min");
}

?>