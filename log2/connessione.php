<?php
if(!empty($_POST['nome'],$_POST['indirizzo'],$_POST['numero'])){
  $file=fopen('testo.php','r');
  $contenuto=fread($file,filesize('testo.php'));
  $data=explode("/",$contenuto);
  $parola="";
  $parloa2="esercizio";
  $conn=new mysqli($data[0],$data[1],$parola,$parloa2);
  if($conn==false){
      echo 'fallimento';
  }else{
      $comando="INSERT INTO scuola(nome,indirizzo,numero) VALUES($_POST['nome'].','.$_POST['indirizzo'].','.$_POST['numero']");
      if($conn->querry($comando)==true){
          header("Location: http://localhost/conn.php");
      }
  }
}
 
 
?>
