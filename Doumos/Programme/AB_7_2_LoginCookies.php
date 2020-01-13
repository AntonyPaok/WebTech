<?php
echo "\$_POST: <pre>"; print_r($_POST); echo "</pre>";
echo "\$_COOKIE: <pre>"; print_r($_COOKIE); echo "</pre>"; 
?>

<form action="" method="POST">
    <input type="text" name="name" value="Anmeldename">
    <br>
    <br>
    <input type="text" name="pw" value="Passwort">
    <br>
    <br>
    Hochschulgruppe:
            <input type="radio" name="HSgr" value="Student" id="std">
            <label for="std">Student</label>
            <input type="radio" name="HSgr" value="Prof" id="prof">
            <label for="prof">Prof</label>
        <br>
        <br>
    <input type="submit" value="Login">
</form>

<?php
if ( empty($_POST) ) {
    echo "Noch keine Daten eingegeben!";
} else {
    setcookie("Anmeldename",$_POST["name"]);
    setcookie("Passwort",sha1($_POST["pw"]));
    setcookie("Hochschulgruppe",$_POST["HSgr"]);
}
?>