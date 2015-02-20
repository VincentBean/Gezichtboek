<?php

include "account.php";

$account = new Accounts();


$account->loguit($_SESSION['id']);

header("Location: ../index.php");

?>
