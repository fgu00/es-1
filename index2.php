<?php
     echo "<table align=center>
     <tr><th><t1>benvenuto</t1></th></tr>
     <tr><th><form action= index2.php method=post></th></tr>
     <tr><th>dimmi un path: <input type = text name=path></th></tr>
     <tr><th><input type=submit value=submit> </th></tr>
     </table>
     </form>";
     $path=__DIR__."/".$_POST["path"];
     echo "ROOT: $path</br>";
    $file=scandir($path,"1");
     //$contenuto[]=scandir($path);
    for($numero=0;$numero<sizeof(scandir($path)); $numero++){
        echo "<tr>"."<td> <a href=".$_POST["path"]."/".$file[$numero].">".$file[$numero]."</a><br>"."</td>"."</tr>";
    }
    closedir($contenuto);
?>
