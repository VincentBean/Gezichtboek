 <?php

include "account.php";

$account = new Accounts();

$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$wachtwoord = $_POST['wachtwoord'];
$email = $_POST['email'];

$account->registreer($voornaam, $achternaam, $wachtwoord, $email);

header("Location: ../index.php");

?>
