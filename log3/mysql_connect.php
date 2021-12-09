<?php
    include 'lib/connDB.php';
    echo "<html>
        <head>
            <title>Connect to your MySQL DBMS</title>
        </head>
        <body>
            <h3>Connect to MYSQL</h3>
            <form action='' method='post'>
                <fieldset>
                    <p> Hostname : <input type='text' name='srv_name' placeholder='127.0.0.1/example.com' required>  Port : <input type='number' name='port' min='0' max='65535' placeholder='3306'></p>
                    <p> Username : <input type='text' name='usrname' placeholder='username' required></p>
                    <p> Password : <input type='password' size='16' name='pass' placeholder='1234abcd'></p>
                    <p> Nome DB : <input type='text' name='nameDB' placeholder='mydatabase' required></p>
                    <input type='submit' value='Login'>
                </fieldset>
            </form>
        </body>
    </html>
    ";
    //controllo che ci siano i dati inseriti
    if(!empty($_POST['srv_name']) && !empty($_POST['usrname']) && !empty($_POST['nameDB'])){
        $conn;
        if(!empty($_POST['port'])){
            $conn = getPOST($_POST['srv_name'].":".$_POST['port'], $_POST['usrname'], $_POST['pass'],$_POST['nameDB']);
        } else {
            $conn = getPOST($_POST['srv_name'], $_POST['usrname'], $_POST['pass'], $_POST['nameDB']);
        }
        if ($conn->connect_error) {
            echo 'Connection error: ' . $conn->connect_error;
        } else {
            $conn->close();
            $file = fopen("conf/config.php", "w") or die("Errore nella crezione del file");
            $testo = '<?php
    $db = array(
        "srv_name" => "'.$_POST['srv_name'].'",
        "usrname" => "'.$_POST['usrname'].'",
        "pass" => "'.$_POST['pass'].'",
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
