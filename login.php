<?php

include "inc/account.php";

  $account = new Accounts();

  $email = $_POST['login-email'];
  $wachtwoord = $_POST['login-wachtwoord'];

  if ($account->login($email, $wachtwoord)) {
    echo "Ingelogd";
  } else {
    echo "Gefaalt";
  }


?>
