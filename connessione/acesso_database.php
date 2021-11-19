<?php
include "connDB.php";
echo '<form action="acesso_database.php" method="POST">
servername:<input type="text" name="servername"></br>
username:<input type="text" name="username"></br>
password:<input type="password" name="password"></br>
nameDB:<input type="text" name="nameDB"></br>
<input type="submit" value="spedisci">
</form>';
if(!empty($_POST)){
         $host=$_POST['servername'];
         echo $host;
         $user=$_POST['username'];
         echo $user;
         $password=$_POST['password'];
         $name=$_POST['nameDB'];
         echo $name;
         include "mysql3.php";
        $conn= connDB($host,$user,$password,$name);
        echo "      qui";
         if(connect_error($conn)|| $con->connect_error){
            die ("connessione fallita: ".connect_error($conn));
           echo "connessione fallita";
         }else{
             echo "connessione riuscita";
             echo "cioa";
             $conn->close();
             $file=fopen(__DIR__."D:\Utenti\russo.salvatore\Desktop\es-1\connessione\configurazione\configurazione.php","w");
            $testo='<?php
            $db=array("url"=>$host,
            "username"=>$user,
            "password"=>$password,
            "dbname"=>"$name"
         );
         define("BASE_URL","'.dirname($_SERVER['HTTP_REFERER']).'/");
         ?>'; 
         echo "<br>fatto</br>";
            $file.fwrite($file,$testo);
             $file.close($file);
             header('locate : '.dirname($_SERVER['HTTP_REFERER'])."/insert.php");      
         }
        }
?>