<!DOCTYPE html>
<html>

<head>
    <title>Variablen</title>
</head>

<body>

    <?php
$x = 2;
$y = 5;

//Es erscheint die zwei (intern als Integer Wert)
echo $x; echo "<br>";

//Es erscheint die zwei (intern als String Wert)
echo "$x"; echo "<br>";

//Es erscheint die zwei (intern als String Wert) FALSCHE ANNAHME!! --> $x
echo '$x'; echo "<br>";

//Es erscheint die sieben (Integer)
echo $x + $y; echo "<br/>"; 

//Es erscheint die sieben (String) FALSCHE ANNAHME!! --> 2+5
echo "$x + $y"; echo "<br/>"; 

//Es erscheint die sieben (String) FALSCHE ANNAHME!! --> $x + $y
echo '$x + $y'; echo "<br/>"; 

//Es erscheint die fünf FALSCH!! --> 2" + "5 
//Der Backslash führt dazu, das das folgende Zeichen einfach angezeigt 
// wird und die eigentliche Funktion des Zeichens verloren geht
echo "$x\" + \"$y"; echo "<br/>"; 

//Es erscheint: "Das Ergebnis von 2+5 ist 7"
echo "Das Ergebnis von $x + $y ist " . ($x + $y); 

?>

    <div style="margin-top:20px; text-align: center;">
        <table border="1">
            <tr>
                <th>Operator</th>
                <th colspan="2">Operanden</th>
                <th>Ergebnis</th>
            </tr>
            <tr>
                <td>+</td>
                <td> <?php echo $x; ?> </td>
                <td> <?php echo $y; ?> </td>
                <td> <?php echo ($x+$y); ?> </td>
            </tr>
            <tr>
                <td>-</td>
                <td> <?php echo $x; ?> </td>
                <td> <?php echo $y; ?> </td>
                <td> <?php echo ($x-$y); ?> </td>
            </tr>
            <tr>
                <td>*</td>
                <td> <?php echo $x; ?> </td>
                <td> <?php echo $y; ?> </td>
                <td> <?php echo ($x*$y); ?> </td>
            </tr>
            <tr>
                <td>/</td>
                <td> <?php echo $x; ?> </td>
                <td> <?php echo $y; ?> </td>
                <td> <?php echo ($x/$y); ?> </td>
            </tr>
            <tr>
                <td>%</td>
                <td> <?php echo $x; ?> </td>
                <td> <?php echo $y; ?> </td>
                <td> <?php echo ($x%$y); ?> </td>
            </tr>
            <tr>
                <td>.</td>
                <td> <?php echo $x; ?> </td>
                <td> <?php echo $y; ?> </td>
                <td> <?php echo ($x.$y); ?> </td>
            </tr>
        </table>

    </div>

</body>

</html>