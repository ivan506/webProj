<?php
$benutzername = $_POST["Benutzername"];
$passwort       = $_POST["Passwort"];
Signin($benutzername, $passwort);
?>




<?php

function Signin($benutzername, $passwort)
{
    include "webaccess.php";
    if ($benutzername == $toCompareName && $passwort == $toComparePW) {
        header("location: ./../HTML/chat.html");
    } else {
        header("location: ./../HTML/fail.html");
    }
}

?>