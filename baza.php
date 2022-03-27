<?php
require"login.php";
if(isset($_POST['submit'])){
    $db= mysqli_connect($host, $log, $pass, $baza) or die("Połączenie nie udane");
    mysqli_close($db);
    header("Location: dodawanie.html?dodaj");
}else{
    
}

?>