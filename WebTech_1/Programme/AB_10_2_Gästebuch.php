<h1>Unser Gästebuch</h1>
<form action="AB_10_2_Gästebuch.php" method="POST">

<input type="text" name="gastname" placeholder="Name"> <br>
<br><input type="text" name="mail" placeholder="E-Mail"> <br>
<br><textarea name="kommentar" cols="40" rows="10" placeholder= "Hier steht ihr Kommentar..."></textarea><br>
<br><input type="submit" name="submit" value="Verfassen">

</form>

<?php
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
$sql = "INSERT INTO gästebuch(gastname, mail, kommentar)
VALUES ('".$_POST["gastname"]."', '".$_POST["mail"]."', '".$_POST["kommentar"]."')";

if ($mysqli->query($sql) === TRUE) {
    echo "<br>Eintrag erstellt!";
    } else {
    echo "<br>Fehler!";
    }

/**Ausgabe der Datensätze */
$result = $mysqli->query("SELECT gastname, mail, zeit FROM gästebuch");

while ($adresse = $result->fetch_assoc() ) {
    echo "<br>$adresse[gastname], $adresse[mail]";
    $adresse["zeit"] = date("r");
    echo ",  $adresse[zeit] <br>";
}
}
?>