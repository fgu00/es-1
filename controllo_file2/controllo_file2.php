<?php
    //__DIR__ contiene il path al file corrente.
    echo '<form action="controllo_file2.php" method=POST>
     path<input type="text" name="path"><br>
     <input type="submit" values=invio>
     </form>';
    if(!empty($_POST["path"])){
    $path=$_POST["path"];
    echo "ROOT: $path</br>";
    $contenuto = opendir($path);
    while (($file = readdir($contenuto)) !== false) {
            echo "filetype: ".filetype($path."/".$file)." ---->  ".$file."</br>";
        }
        echo "$file</br>";
   }
    closedir($contenuto);

?>