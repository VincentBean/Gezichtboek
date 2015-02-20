<?php

require_once "account.php";
require_once "profiel.php";

session_start();

  $account = new Accounts();

  $email = $_POST['login-email'];
  $wachtwoord = $_POST['login-wachtwoord'];

  if ($account->login($email, $wachtwoord)) {

    $profiel = new Profiel($_SESSION['id']);

    if ($profiel->profielGevonden()) { // profiel gevonden
    	header("Location: ../profiel.php");
    } else { // profiel niet gevonden
    	header("Location: ../index.php?loginerror=Account niet gevonden#login");
    }

  } else { // foute login gegevens
    header("Location: ../index.php?loginerror=Incorrecte login gegevens#login");
  }


?>
