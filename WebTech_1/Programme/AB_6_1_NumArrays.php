<?php
//Aufgabenteil a)
$quadrat = array();
for($i = 0; $i<=5; $i++) {
    $quadrat[$i] = ($i*$i);
}
print_r($quadrat);

echo ("<br>--------------------------");

//Aufgabenteil b)
echo (" <table border =\"1\"> ");
echo (" <tr> ");
foreach($quadrat as $table) {

    echo (" <td> $table </td>");
}
echo( "</tr> ");
echo( "</table>" );
?>