<?php
/*Gültig für 2 Jahre in (angegeben in Sekunden) 
die if-Anweisung --> Cookie nur 1 Mal beschreiben mit sha1-Systemzeit*/
if (!isset($_COOKIE["besucher"]) ) {
    setcookie("besucher",sha1(time()),time()+63115200);
} else { 
    echo "Schon gesetzt!";
}

/*Gültig nur für die Session */
setcookie("zeit",time());
/*Gültig für einen Monat (angegeben in Sekunden) */
setcookie("sprache","deutsch",time()+2629800);

/*Gibt das Array Cookie etwas formatiert aus */
echo "<br>\$_COOKIE: <pre>"; print_r($_COOKIE); echo "</pre>";

/*Cookie löschen --> Wert = 1 (angegeben in Sekunden) --> Zeitpunkt in der Vergangenheit */
setcookie("sprache","deutsch",1);


if (!isset($_COOKIE["anzahl_aufrufe"]) ) {
    setcookie("anzahl_aufrufe",1,time()+31557600);  
} else {
    $anzahl = $_COOKIE["anzahl_aufrufe"];
    $anzahl++;
    setcookie("anzahl_aufrufe",$anzahl,time()+31557600);
}

echo "<br>\$_COOKIE: <pre>"; print_r($_COOKIE); echo "</pre>";
?>