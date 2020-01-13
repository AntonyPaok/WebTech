<?php

/**Initialisierung der Datenbank, wenn "submit_anmelden" gedrückt wurde */

    $server = "localhost"; 
    $database = "webtechübungen";
    $user = "root";
    $password="";


    $mysqli = new mysqli($server, $user, $password, $database); 
    if ($mysqli->connect_errno) { 
        echo "Fehler beim Zugriff auf MySQL: (" .
         $mysqli->connect_errno . ") " . $mysqli->connect_error;
    } 
    $mysqli->set_charset("utf8");     

/**Ausgabe der Datensätze */
echo "<h1>Bedienoberfläche einer Adressdatenbank</h1>";
$result = $mysqli->query("SELECT ID, Vorname, Nachname, Ort FROM adressdatenbank");
echo "<table border=1>";
echo "<tr>";
        echo "<td>ID</td>";
        echo "<td>Vorname</td>";
        echo "<td>Nachname</td>";
        echo "<td>Ort</td>";
        echo "<td colspan = \"2\"></td>";

echo "</tr>";
while ($adresse = $result->fetch_assoc() ) {
    echo "<form action=\"AB_12_1_AdressverwSession.php\" method=\"POST\">";   
    echo "<tr>";
        echo "<td>$adresse[ID]</td>";
        echo "<td>$adresse[Vorname]</td>";
        echo "<td>$adresse[Nachname]</td>";
        echo "<td>$adresse[Ort]</td>";

        echo "<td><input type=\"submit\" name=\"change\" value=\"Ändern\"></td>";

        echo "<td><input type=\"submit\" name=\"delete\" value=\"Löschen\"></td>";
        /**Löschen aus Datenbank */
        if (isset($_POST["delete"])) {
            $sql = "DELETE FROM `adressdatenbank` WHERE `adressdatenbank`.`ID` = SELECT `ID` FROM `adressdatenbank` ";

        if ($mysqli->query($sql) === TRUE) {
            echo "<br>Eintrag gelöscht";
        } else {
            echo "<br>Fehler beim löschen!";
        }
}
   
    echo "</tr>";
}
?>

<tr>
    <td></td>
    <td> <input type="text" name="vorname" placeholder="Vorname"> </td>
    <td> <input type="text" name="nachname" placeholder="Name"> </td>
    <td> <input type="text" name="ort" placeholder="Ort"> </td>

    <td colspan="2"> <input type="submit" name="add" value="Hinzufügen"> </td>

</tr>
</form>


<?php
echo "</table>";

/**Eintragen in Datenbank */
if (isset($_POST["add"])){
$sql = "INSERT INTO adressdatenbank(Vorname, Nachname, Ort)
VALUES ('".$_POST["vorname"]."', '".$_POST["nachname"]."', '".$_POST["ort"]."')";

if ($mysqli->query($sql) === TRUE) {
    echo "<br>Eintrag hinzugefügt!";
} else {
    echo "<br>Fehler beim hinzufügen!";
    }
}



/**Verändern der Datenbank */
if (isset($_POST["change"])) {
    $sql = "UPDATE `adressdatenbank` SET `Ort` = 'Siegen' WHERE `adressdatenbank`.`ID` = 17";

    if ($mysqli->query($sql) === TRUE) {
        echo "<br>Eintrag geändert";
    } else {
        echo "<br>Fehler beim ändern!";
        }
}

?>