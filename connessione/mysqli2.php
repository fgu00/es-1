<?php
//if(!empty($_POST) ){
 $servername = $_POST['servername'];
 $porta=$_POST['porta'];
 $username = $_POST['username'];
 $password = $_POST['password'];
 $nameDB = $_POST['nameDB'];
 $connessione=new mysqli($servername,$username,$password,$nameDB);
 if($connessione->connect_error){
     die("connessione fallita: ".$connessione->connect_error);
 }else{
     echo 'connessione riuscita';
 }
 $sql='INSERT INTO SCUOLA VALUES()  ';
 $m=$connessione->query($sql);
//}
 ?>