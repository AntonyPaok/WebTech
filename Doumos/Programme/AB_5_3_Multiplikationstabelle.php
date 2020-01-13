<?php
$mult_1 = 1;
$mult_2 = 2;
echo "<table border=1>";
echo "<tr>";
for($mult_1=1; $mult_1<=10; $mult_1++){
    echo "<td>" . $mult_1 . "</td>";
    for($mult_2=2; $mult_2<=10; $mult_2++){
        echo "<td>" . ($mult_2*$mult_1) ."</td>";
    }
    echo "</tr>";
}

echo "</table>"
?>