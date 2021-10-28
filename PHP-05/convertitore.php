<html>
    <body>
        <h1>IL NUMERO CONVERTOTO è :</h1>
        <?php
        $numero=$_POST['numero'];
        include "convertitore2.php";
        echo converti($numero);
        ?>
</body>
</html>