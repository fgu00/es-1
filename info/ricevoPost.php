<html>
    <body>
        <h1>Prova paramentri passati in POST</h1>
        <?php
        //recupero il valore del paramentro "nome"
        $nome_utente=$_POST['nome'];
        //recupero il valore del parametro "email"
        $nome_email=$_POST['email'];

        //ora stampo semplicemente a video il risultato
        echo "<p>Ciao  ".$nome_utente."</p>";
        echo "<p>Ciao  ".$nome_email."</p>";
        ?>
    </body>
</html>