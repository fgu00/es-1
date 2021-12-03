<?php
$path=__DIR__."es";
echo "ROOT: $path</br>";
$contenuto = opendir($path);
while (($file = readdir($contenuto)) !== false) {
        echo "filetype: ".filetype($path."/".$file)." ---->  "."<a href =$path.'/'.$file> qui </a>"."</br>";
    }
    echo "$file</br>";
//$dir=array();
//$file2=array();
//foreach($n=0 as scandir($path)){
  //  if(filetype(($path."/".$file)=="dir"){
    //    $dir=array($n,scandir($path,$n));
   // }else{
//$file2=array($n,scandir($path,$n))
  //  }
//}
//foreach($n=0 as $dir){
  //  echo $dir."</br>";
//}
//foreach($n=0 as $file2){
  //  echo $file2."</br>";
//}

//}
closedir($contenuto);

?>