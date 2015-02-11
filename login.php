<?php

include "inc/account.php";
include "inc/profiel.php";

  $account = new Accounts();

  $email = $_POST['login-email'];
  $wachtwoord = $_POST['login-wachtwoord'];

  if ($account->login($email, $wachtwoord)) {
    echo "Ingelogd";
    $profiel = new Profiel();


    if ($profiel->profielGevonden()) { // profiel is gevonden.
    	echo "<br>Naam: " + $profiel->getVoornaam() . " " . $profiel->getAchternaam() . "<br>E-mail: " . $profiel->getEmail() . "<br>Reg. datum: " . $profiel->getRegistratiedatum();
    } else {
    	echo "<br>Profiel niet gevonden! <br>ID: " . $_SESSION["id"];
    }

  } else {
    echo "Kon niet inloggen.";
  }


?>
