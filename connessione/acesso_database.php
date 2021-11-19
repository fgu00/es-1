<?php
echo '<form action="acesso_database.php" method="POST">
servername:<input type="text" name="servername"></br>
username:<input type="text" name="username"></br>
password:<input type="password" name="password"></br>
nameDB:<input type="text" name="nameDB"></br>
<input type="submit" value="spedisci">
</form>';

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
             $file=fopen(__DIR__."D:\Utenti\russo.salvatore\Desktop\es-1\connessione\configurazione\configurazione.php","w");
            $testo='<?php
            $db=array("url"=>$host,
            "username"=>$user,
            "password"=>$password,
            "dbname"=>"$name"
         );
         define("BASE_URL","'.dirname($_SERVER['HTTP_REFERER']).'/");
         ?>'; 
            $file.fwrite($file,$testo);
             $file.close($file);
             header('locate : '.dirname($_SERVER['HTTP_REFERER'])."/insert.php");      
         }
?>