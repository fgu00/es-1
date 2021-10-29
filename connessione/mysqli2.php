<?php
 $servername = $_POST['servername'];
 $username = $_POST['username'];
 $password = $_POST['password'];
 $nameDB = $_POST['nameDB'];
 $connessione=new mysqli($servername,$username,$password,$nameDB);
 ?>