<htlm>
    <body>

        <form action="login.php" method = "POST">        
            <fieldset>
                <legend>
                    Connessione DataBase:
                </legend>
                <p>HOSTNAME (indirizzo ip): <input type="text" name="hostname"></p>
                <p>USER (utente database): <input type="text" name="user"></p>
                <p>PW (password utente database): <input type="text" name="pw"></p>
                <p>DB NAME (nome del database): <input type="text" name="db"></p>
                <input type="submit" value="Fatto">
            </fieldset>
        </form>
</htlm>
<?php
    include "connessione.php";
    if(!empty($_POST)){
        $conn = conn($_POST['hostname'], $_POST['user'], $_POST['pw'], $_POST['db']);
        if ($conn -> connect_error) { 
            die('connessione fallita: '  . $conn->connect_error); 
        }else{ 
            echo 'CONNESSIONE RIUSCITA!';
           header("Location: http://localhost/ConnDB3.php?hostname=".$_POST['hostname']."&user=".$_POST['user']."&pw=".$_POST['pw']."&db=".$_POST['db']); 
        }
    }
     
?>