<?php
echo"<h1>salvo il cookie</h1>";
$name="2";
$value="ciao mondo";
$expire=86000;
$path="/";
$domain="";
$secure="";
$httpOnly=true;
setcookie($name,$value,time()+$expire,$path,$domain,$secure,$httpOnly);
?>