<?php
echo "<form method='POST'>
<p></p>login:</br>
<input type='text' name='login'></p>
<p></p>password:</br>
<input type='text' name='pws'></p>
</p>
<input type='submit' name='setcoockie' value='setta coockie'>
</form>";
if(!empty($_POST)){
    setcookie("login",$_POST["login"]);
    setcookie("pws",$_POST["pws"]);
}
echo "login ".$_COOKIE['login']." e password ".  $_COOKIE['pws'];
?>