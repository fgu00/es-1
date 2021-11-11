<?php
echo '<form action="acesso_database.php" method="POST">
servername:<input type="text" name="servername"></br>
username:<input type="text" name="username"></br>
password:<input type="password" name="password"></br>
nameDB:<input type="text" name="nameDB"></br>
<input type="submit" values="spedisci">
</form>';

     if(!empty($_POST)){
         $host=$_POST['servername'];
         $user=$_POST['username'];
         $password=$_POST['password'];
         $name=$_POST['nameDB'];
         include "mysql3.php";
        $conn= connDB($host,$user,$password,$name);
        if(!empty($conn)){
            echo "efef";
        }

         if(connect_error($conn)){
            die ("connessione fallita: ".connect_error($conn));
         }else{
             echo 'connessione riuscita';
         }

        // echo  header('locate : http://russo.salvatore.tave.osdb.it/inizio_connessiome.html/');
       //  header('locate : http://russo.salvatore.tave.osdb.it/inizio_connessiome.html/');
     }
?>