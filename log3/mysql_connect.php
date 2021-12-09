<?php
    include 'connDB.php';
    echo "<html>
        <head>
            <title>Connect to DBMS</title>
        </head>
        <body>
            <form action='mysql_connect.php' method='post'>
                <fieldset>
                    <p> Servername :<input type='text' name='servername'></p>
                    <p> Username :<input type='text' name='username'></p>
                    <p> Password :<input type='password' name='password'></p>
                    <p> Nome DB :<input type='text' name='nameDB'></p>
                    <input type='submit' value='Login'>
                </fieldset>
            </form>
        </body>
    </html>
    ";
    //controllo che ci siano i dati inseriti
    if(!empty($_POST['servername']) && !empty($_POST['username']) && !empty($_POST['nameDB'])){
        $conn=getPOST($_POST["servername"], $_POST["username"], $_POST["password"], $_POST["nameDB"]);
        if ($conn->connect_error) {
            echo 'Connection error: ' . $conn->connect_error;
        } else {
            $conn->close();
            $file = fopen("config.php", "w") or die("Errore nella crezione del file");
            $testo = '<?php
    $db = array(
        "servername" => "'.$_POST['servername'].'",
        "username" => "'.$_POST['username'].'",
        "password" => "'.$_POST['password'].'",
        "nameDB" => "'.$_POST['nameDB'].'"
    );
    define ("BASE_URL", "'.dirname($_SERVER['HTTP_REFERER']).'/");
?>';
            fwrite($file, $testo);
            fclose($file);
            header('Location: '.dirname($_SERVER['HTTP_REFERER'])."/mysql_insertdata.php");
        }     
    }   
?>
