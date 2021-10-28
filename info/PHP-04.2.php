<html>
    <body>
        <h1>indovina il numero</h1>
        <form method="POST" action="PHP-02.2.php">
        numero <input type="text"
                        name="nome"><br>
        <?php
        //recupero il valore del paramentro "numero"
        $numero=$_POST['numero'];
        if(numero==$numero){
            echo "<p></p>"
        }
        echo "<p>Ciao  ".$nome_utente."</p>";
        echo "<p>Ciao  ".$descrizione."</p>";
        echo "<p>Ciao  ".$prezzo."</p>";
        ?>
    </body>
</html>