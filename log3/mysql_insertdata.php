<?php
    include 'conf7config.php';
    include 'lib7connDB.php';
    echo '<html>
        <head>
            <title>Database "'.$db['nameDB'].'"</title>
        </head>
        <h3>Here you are: DATABASE "'.$db['nameDB'].'"</h3>
            <form action="mysql_insertdata.php" method="POST">
                <fieldset>
                    <p> Codice : <input type="text" name="code">
                    <p> Nome : <input type="text" name="name"></p>
                    <p> Indirizzo : <input type="text" name="address"></p>
                    <p> Telefono : <input type="text" name="phone_n"></p>
                </fieldset>
            </form>
        </body>
    </html>';
    $rs;
    if(!empty($_POST["cf"]) && !empty($_POST["nome"]) && !empty($_POST["cognome"]) && !empty($_POST["email"])){
        $conn = getPOST($db["srv_name"], $db["usrname"], $db["pass"], $db["nameDB"]);
        if(!$conn->connect_error){
            $query = "INSERT INTO anagrafica VALUES ('".$_POST["cf"]."','".$_POST["nome"]."','".$_POST["cognome"]."','".$_POST["email"]."')";
            $rs = $conn->query($query);
            if(isset($rs))
                echo "<h3 style='color:blue'>Tupla aggiunta</h3>";
            else
                echo "<h3 style='color:red'>Impossibile aggiungere la Tupla</h3>";
            
        }else{
            die("Errore connessione al database");
        }
    } else{
        echo "<h3 style='color:red'>Tutti i campi sono obbligatori</h3>";
    }
?>