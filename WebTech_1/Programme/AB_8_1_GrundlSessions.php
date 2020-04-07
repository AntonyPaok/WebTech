<?php
    session_start();
    
    $_SESSION["Datum"] = date("r");

    echo "Session aktiv seit: " . $_SESSION["Datum"];
?>