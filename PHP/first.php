<?php
$benutzername = $_POST["Benutzername"];
$passwort       = $_POST["Passwort"];
Signin($benutzername, $passwort);
?>




<?php

function Signin($benutzername, $passwort)
{
    include "webaccass.php";
    if ($benutzername == $toCompareName && $passwort == $toComparePW) {
        header("location: ./../HTML/chat.html");
    } else {
        echo "Login fail !";
    }
}

?>