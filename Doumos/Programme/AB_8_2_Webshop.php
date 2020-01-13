<?php
    session_start();
?>

<h3> Wählen Sie die Artikel aus, die in den Warenkorb gelegt werden sollen </h3>
<form action="" method="GET">
    <label> <input type="checkbox" name="artikel[]" value= "PC" > PC </label>
    <label> <input type="checkbox" name="artikel[]" value= "Maus" > Maus </label>
    <label> <input type="checkbox" name="artikel[]" value= Tastatur > Tastatur </label>
    <label> <input type="checkbox" name="artikel[]" value= "Bildschirm" > Bildschirm </label>
    <br><br>
    
    <input type="submit" value="Hinzufügen">
</form>
