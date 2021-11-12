<?php
echo '<form action="acesso_database.php" method="POST">
servername:<input type="text" name="servername"></br>
username:<input type="text" name="username"></br>
password:<input type="password" name="password"></br>
nameDB:<input type="text" name="nameDB"></br>
<input type="submit" value="spedisci">
</form>';

    // if( !emply($_POST['servername'])&& !emply($_POST['username'])&&!emply($_POST['password'])&&!emply($_POST['nameDB'])){
         $host=$_POST['servername'];
         $user=$_POST['username'];
         $password=$_POST['password'];
         $name=$_POST['nameDB'];
         include "mysql3.php";
        $conn= connDB($host,$user,$password,$name);
         if($conn->connect_error && $name->empty){
            die ("connessione fallita: ".$conn->connect_error);
         }else{
             echo "connessione riuscita";
             $conn->close();
             $file=fopen("D:\Utenti\russo.salvatore\Desktop\es-1\connessione\configurazione\configurazione.php");
             $testo='<php
             $db=array(
                url=$ '
         }
        

         echo  header('locate : http://russo.salvatore.tave.osdb.it/inizio_connessiome.html/');
        header('locate : http://russo.salvatore.tave.osdb.it/inizio_connessiome.html/');
    // }
?>