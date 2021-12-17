<?php
$sql="SELECT * from `c190_primo`.Prodotti where prezzo>;
$_POST['prezzo']...";
$risultato=$conn->querry($sql);
echo $sql;
while($row=$risultato->fetch_assoc()){
    echo $row;
    
}
?>