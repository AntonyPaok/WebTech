<?php
 if(!empty($_POST)) { // Daten über POST, d.h. Anzahl Würfe von Eingabe abhängig
    $anzahlWuerfe = $_POST['anzahlWuerfe'];
} 
else { // keine Daten über POST, d.h. 10 Würfe 
/*--> 10 als default-Wert */
$anzahlWuerfe = 10;
?>

<br> Wie oft soll gewürfelt werden? <br>
<form action="http://localhost/AB_6_3_Würfeln.php" method="POST">
<input type="text" name="anzahlWuerfe" placeholder="Anzahl Würfe">
<br> <input type="submit" value="Bestätigen">
</form>

<?php
}

$augenzahl = array();
$anzahl = array();
/*Notwendig, um sich die Augenzahl des Würfels zu merken*/ 
$wurf = 0;


$augenzahl[0] = "Augen";
$anzahl[0] = "Anzahl";

for ($i=1; $i<=6; $i++) {
    /*Füllt das erste Array mit den möglichen Augenzahlen*/
    $augenzahl[$i] = $i;
    /*Setzt die Anzahl aller Augenzahlen standardmäßig auf "0" */
    $anzahl[$i] = 0;
}

/*Die Durchgänge werden simulliert*/
for ($i=1; $i<=$anzahlWuerfe; $i++){
    /*Erzeugen einer Zufallszahl */
    $wurf = mt_rand(1, 6);
    echo "Wurf $i = ";

    /*Prüft welche Zahl gewürfelt wurde und inkremmentiert die Anzahl*/
    switch ($wurf) {
        case 1:
            echo $wurf;    
            $anzahl[1] ++;
            break;
        case 2:
            echo $wurf;
            $anzahl[2] ++;
            break;
        case 3:
            echo $wurf;
            $anzahl[3] ++;
            break;
        case 4:
            echo $wurf;
            $anzahl[4] ++;
            break;
        case 5:
            echo $wurf;
            $anzahl[5] ++;
            break;
        case 6:
            echo $wurf;
            $anzahl[6] ++;
            break;
    }
    echo "<br>";
}

echo "<br> Auswerung: <br>";
echo ( "<br> <table border = 1>" );

echo ( "<tr>" );
foreach ($augenzahl as $key => $value) {
    echo ( "<td>$value</td> ");
}
echo ( "</tr>" );

echo( "<tr>");
foreach ($anzahl as $key => $value) {
    echo ( "<td>$value</td> ");
}
echo ( "</tr>" );

echo ( "</table>");
   
?>