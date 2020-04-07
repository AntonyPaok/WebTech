<?php
$bel_array = array();
$bel_array["modul"] = "Webtechnologie";
$bel_array["dozent"] = "Prof. de Vries";
$bel_array["anzahlÜbungen"] = 2;

echo ("So ist das Array belegt:<br>");
print_r($bel_array);

echo ("<hr>Aufgabenteil a): Wie groß ist das Array?<br>");
echo ("Das Array ist <b>" . count($bel_array) . " </b>Einträge groß!<br>");

echo ("<hr>Augabenteil b): Geben Sie das letzte Element des Arrays aus und entfernen dieses!");
echo ("<br>Das letzte Element des Arrays ist: <b>" . array_pop($bel_array) . "</b><br>" );
print_r($bel_array);

?>