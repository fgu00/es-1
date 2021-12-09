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
                fopen("log.txt","a+");
                fwrite("inserimento riuscito");

               // echo "<h3 style='color:blue'>Tupla aggiunta</h3>";
        }else{
            fopen("log.txt","a+");
            fwrite( die("Errore connessione al database"));
        }
?>