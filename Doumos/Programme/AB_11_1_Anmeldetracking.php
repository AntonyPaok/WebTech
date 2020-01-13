<h1>Anmeldetracking</h1>
<form action="AB_11_1_Anmeldetracking.php" method="POST">

<input type="text" name="anmeldename" placeholder="Anmeldename"> <br>
<!-- <br><input type="text" name="ip" placeholder="IP-Adresse"> <br> -->

<br><input type="submit" name="submit" value="Anmelden">

</form>

<?php

echo "UPDATE `anmeldetracking` SET `anzahl` = '2' WHERE `anmeldetracking`.`anmeldename` = 'client_2';";
/**Initialisierung der Datenbank, wenn "submit" gedrück wurde */
if (isset($_POST["submit"])){
$server = "localhost"; 
$user = "root"; 
$password = "";
$database = "webtechübungen";

$mysqli = new mysqli($server, $user, $password, $database); 
if ($mysqli->connect_errno) { 
    echo "Fehler beim Zugriff auf MySQL: (" .
     $mysqli->connect_errno . ") " . $mysqli->connect_error;
} 
$mysqli->set_charset("utf8"); 

/**Was hat das Formular gespeichert? */
print_r($_POST);

/**Eintragen in Datenbank */
$sql = "INSERT INTO anmeldetracking(anmeldename, ip)
VALUES ('".$_POST["anmeldename"]."', '".$_SERVER["REMOTE_ADDR"]."')";

echo "<br> $sql";

if ($mysqli->query($sql) === TRUE) {
    echo "<br>Eintrag erstellt!";
    } else {
    echo "<br>Fehler!";
    }
    
/**Ausgabe der Datensätze */
$result = $mysqli->query("SELECT anmeldename, ip FROM anmeldetracking");

while ($adresse = $result->fetch_assoc() ) {
    echo "<br>$adresse[anmeldename], $adresse[ip]";
    }
}
?>