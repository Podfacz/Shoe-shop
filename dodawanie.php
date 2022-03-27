<?php
require"login.php";
$db= mysqli_connect($host, $log, $pass, $baza) or die("Połączenie nie udane");
if(null!==$_POST['dodaj'] && $_POST['ilosc_butow'] && $_POST['nazwa_buta']){
    $nazwa_buta=$_POST['nazwa_buta'];
    $ilosc_butow=$_POST['ilosc_butow'];
    echo"<a href=dodawanie.html>Wróć do panelu dodawania</a><br/>";
    echo("Dodano: $nazwa_buta</br>
    W ilości: $ilosc_butow</br>");
    mysqli_query($db, "INSERT INTO buty (nazwa_buta, ilosc_butow) VALUES ('$nazwa_buta',$ilosc_butow)");
    $wynik = mysqli_query($db, "SELECT * FROM buty")
    or die('Błąd zapytania');
    if(mysqli_num_rows($wynik) > 0) {
        echo "<table cellpadding=\"2\" border=1>";
        while($r = mysqli_fetch_assoc($wynik)) {
            echo "<tr>";
            echo "<td>".$r['nazwa_buta']."</td>";
            echo "<td>".$r['ilosc_butow']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}else{
    echo("Nie podao wartości");
}
?>