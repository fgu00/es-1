<?php
if(!empty($_POST) ){
 $servername = $_POST['servername'];
 $porta=$_POST['porta'];
 $username = $_POST['username'];
 $password = $_POST['password'];
 $nameDB = $_POST['nameDB'];
 $connessione=new mysqli($servername,$username,$password,$nameDB);
 if($conn->connect_error){
     die("connessione fallita: ".$conn->connect_error)
 }else{
     echo "connessione riuscita";
 }
}
 ?>