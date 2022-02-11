<?php
include "conn_join.php";
echo "<form action='es_join.php' method='POST'>
codice fiscale<input type='text' nome='cf'>
nome<input type='text' nome='nome'>
cognome<input type='text' nome='cognome'>
età<input type='text' nome='eta'>
</form>";
if(!empty($_POST)){
    $conn=connDB2("localhost","root","","c190_primo");
    if($conn->connect_error){
        echo $conn->connect_error;
    }else{
        $comando="INSERT INTO persona ('cf','nome','cognome','eta') VALUES ($_POST['cf'],$_POST['nome'],$_POST['cognome'],$_POST['eta'])";
        $conn->querry($comando);
        if($conn->connect_error){
            echo $conn->connect_error;
        }else{

        }
    }
}
?>