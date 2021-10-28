<html>
<body>
<h1>fleg di congerma checkbox</h1>
<?php
$prodotti=array{
    "1q"=>"macchina",
    "2q"=>"libro",
    "3q"=>"quaderno",
    "4q"=>"scarpo",
};
echo "<form action='PHP-checkBox.php' method='post'>";
foreach($prodotti as $k=>$v){
    echo '<input type="checkbox" name="'.$k.'"value="'.$v.'">'.$v.'</br>';
}
echo '<input type="submit" value="CARRELLO">';
echo "<h3>SELEZIONATI</h3>"
foreach($_POST as $k=>$V){
    echo "$k-$v</br>";
}
?>
</body>
</html>