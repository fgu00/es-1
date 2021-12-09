<?php
    include 'config.php';
    include 'connDB.php';
    echo '<html>
        <head>
            <title>Database "'.$db['nameDB'].'"</title>
        </head>
        <h3>Here you are: DATABASE "'.$db['nameDB'].'"</h3>
            <form action="mysql_insertdata.php" method="POST">
                <fieldset>
                    <p> Codice : <input type="text" name="code">
                    <p> Nome : <input type="text" name="name"></p>
                    <p> Cognome : <input type="text" name="cognome"></p>
                    <p> Indirizzo : <input type="text" name="address"></p>
                    <p> Telefono : <input type="text" name="phone"></p>
                    <input type="submit" value="Login">
                </fieldset>
            </form>
        </body>
    </html>';
    $rs;
    if(!empty($_POST["code"]) && !empty($_POST["nome"]) && !empty($_POST["address"]) && !empty($_POST["phone"])){
        $conn = getPOST($_POST["servername"], $_POST["username"], $_POST["password"], $_POST["nameDB"]);
        if(!$conn->connect_error){
            $query = "INSERT INTO studente VALUES ('".$_POST["code"]."','".$_POST["nome"]."','".$_POST["cognome"]."','".$_POST["address"]."','".$_POST["phone"]."')";
            $rs = $conn->query($query);
            if(isset($rs)){
                echo "<h3 style='color:blue'>Tupla aggiunta</h3>";
            }else{
                echo "<h3 style='color:red'>Impossibile aggiungere la Tupla</h3>";
        }else{
            die("Errore connessione al database");
        }
    } else{
        echo "<h3 style='color:red'>Tutti i campi sono obbligatori</h3>";
    }
?>