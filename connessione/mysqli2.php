<?php
 $servername = $_POST['servername'];
 $porta=$_POST['porta'];
 $username = $_POST['username'];
 $password = $_POST['password'];
 $nameDB = $_POST['nameDB'];
 $connessione=new mysqli($servername,$porta,$username,$password,$nameDB);
 ?>