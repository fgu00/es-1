<?php
echo "<html>
<head>
    <title>Connect to DBMS</title>
</head>
<body>
    <form action='mysql_connect.php' method='post'>
    prezzo:<input type='text' name='prezzo'></br>
        <input type='submit' values='spedisci'>
    </body>
    </html>";
    
$sql="SELECT * from `c190_primo`.Prodotti where prezzo>
$_POST['prezzo']...";
//$risultato=$conn->querry($sql);
echo $sql;
//while($row=$risultato->fetch_assoc()){
  //  echo $row;

//}
?>