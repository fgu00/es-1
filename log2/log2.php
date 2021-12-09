<?php
echo '
<html>
    <head>
        <h1>conessione al server mysqli</h1>
    </head>
    <body>
        <form action="log.php" method="POST">
            nome:<input type="text" name="servername"></br>
            nome:<input type="text" name="username"></br>
            indirizzo:<input type="password" name="password"></br>
            numero:<input type="text" name="nameDB"></br>
            <input type="submit" values="spedisci">
        </form>
    </body>
</html>
 
 
';
 
 
 
$conn = new mysqli($_POST['servername'],$_POST['username'],$_POST['password'],$_POST['nameDB']);
if($conn->connect_error){
die('connessione fallita : '.$conn->connect_error);
}else{
    echo 'conessione riuscita';
 
$file = fopen("testo.php", "w");
$string = $_POST['servername']."/".$_POST['username']."/".$_POST['password']."/".$_POST['nameDB'];
fwrite($file, $string);
fclose($file);
 
echo'<html>
<head>
    <h1>invio dei dati</h1>
</head>
<body>
    <form action="verifica.php" method="POST">
        nome:<input type="text" name="nome"></br>
        indirizzo:<input type="text" name="indirizzo"></br>
        numero:<input type="password" name="numero"></br>
        <input type="submit" values="invia">
    </form>
</body>
</html>';
 
 
 
}

 
 
 
?>
