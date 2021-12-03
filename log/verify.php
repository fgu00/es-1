<?php
if(
    !empty($_POST['nome'])&&
    !empty($_POST['indirizzo'])&&
    !empty($_POST['numero'])
){
    //lettura file
    $filename = 'config/file.txt';
    $file = fopen($filename, 'r');
     $content=  fread($file, filesize($filename));
     //fine lettura
     $data = explode("/", $content);
     $pw = "";
     $db="esercitazione";
    $conn = new mysqli($data[0], $data[1], $pw, $db);
    if($conn === false){
     echo "unsucess";
    }else{
    $sql="INSERT INTO scuola (nome , indirizzo, numero) VALUES ('".$_POST['nome']."','".$_POST['indirizzo']."','".$_POST['numero']."')";
    if($conn->query($sql)  === true){
        //// header("Location: http://ardizzone.pietro.tave.osdb.it/login.php
     header("Location: http://localhost/login.php");
    }else{
      echo "no: ".$conn->error;
    }
    }
  
    
    
     
    
}else{
    echo "unsuccess";
}




?>