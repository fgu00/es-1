<?php
if(!empty($_GET['hostname']) && !empty($_GET['user'])){
$filename = '.txt';
$handler = fopen($filename, 'w+');

if (false === $handler) {
    printf('Impossibile aprire il file %s', $filename);
    exit;
fwrite($handler, $_GET['hostname']."/".$_GET['user']); 
fclose($handler);
}else{
    echo "unsucess";
}

echo '<htlm>
<body>

    <form action="verify.php" method = "POST">        
        <fieldset>
            <legend>
             Scrittura DataBase:
            </legend>
            <p>nome: <input type="text" name="nome"></p>
            <p>indirizzo: <input type="text" name="indirizzo"></p>
            <p>numero: <input type="text" name="numero"></p>
            
            <input type="submit" value="invia">
        </fieldset>
    </form>

</htlm>
';

?>