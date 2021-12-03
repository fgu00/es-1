<?php
$path=__DIR__."es";
echo "ROOT: $path</br>";
$contenuto = opendir($path);
while (($file = readdir($contenuto)) !== false) {
        echo "filetype: ".filetype($path."/".$file)." ---->  ".$file."</br>";
    }
    echo "$file</br>";
$dir=array();
    while (($file = readdir($contenuto)) !== false) {
       
    }   
}
closedir($contenuto);

?>