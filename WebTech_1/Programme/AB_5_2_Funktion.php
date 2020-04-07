<?php 
$untere_grenze = -2;
$obere_grenze = 5;
echo "<table style=\"border:1px solid\"><tr style=\"border:1px solid\">";
echo "<th>" . "x" . "</th>";
for ($i=$untere_grenze; $i<=$obere_grenze; $i++) {
echo "<td style=\"border:1px solid\">" . $i . "</td>";
}

echo "</tr><tr>";
echo "<th>" . "f(x)" . "</th>";
for ($i=$untere_grenze; $i<=$obere_grenze; $i++) {
    echo "<td style=\"border:1px solid\">" . (pow($i,3) + 1) . "</td>";
    }
echo "</tr></table>"
?>
