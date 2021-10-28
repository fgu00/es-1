<html>
    <body>
        <h1>Prova paramentri passati in POST</h1>
        <?php
        //recupero il valore del paramentro "nome"
        $nome_utente=$_POST['nome'];
        //recupero il valore del parametro "descrizione"
        $descrizione=$_POST['descrizione'];
        //recupero il valore del parametro "prezzo"
        $prezzo=$_POST=['prezzo'];
        //ora stampo semplicemente a video il risultato
        echo "<p>Ciao  ".$nome_utente."</p>";
        echo "<p>Ciao  ".$descrizione."</p>";
        echo "<p>Ciao  ".$prezzo."</p>";
        ?>
    </body>
</html>