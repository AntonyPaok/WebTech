<h1>Anmeldung</h1>
<form action="AB_12_1_AdressverwSession.php" method="POST">
<input type="text" name="user" placeholder="User"> <br>
<br><input type="text" name="password" placeholder="Passwort"> <br>

<br><input type="submit" name="anmelden" value="Anmelden">
</form>
<?php
if ( isset($_POST["anmelden"]) ) {
$user = "root";
$password = sha1("");

$user_I = $_POST["user"];
$password_I = sha1($_POST["password"]);

/**Prüfen, ob die Anmeldedaten korrekt sind */
if ( $user_I!=$user && $password_I!=$password ) { 
    echo "<h3>Falsche Anmeldedaten!!</h3>";
}
}
?>