<?php
/*
    Bestand: profiel.php
    Gemaakt: 19-02-2015
    Door: Vincent Boon
    Omschrijving:
        Profielpagina van gebruikers.
        Er kan in de get array een id mee worden gegeven van het profiel dat geladen moet worden,
        als dit niet het geval is word de ingelogde gebruiker geladen.

    Laatst gewijzigd: 
        - 25-03-2015
*/
require_once "inc/profiel.php";

session_start();

    if ( !isset($_SESSION["loggedin"]) )  header("Location: index.php");

    if (!$_SESSION["loggedin"]) header("Location: index.php");

    $profiel = Profiel::laadMetIngelogd();

    
 
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Gezichtboek">
    <meta name="author" content="Gezichtboek">

    <title>Gezichtboek - Tijdlijn</title>

    <!-- Onze CSS -->
    <link rel="stylesheet" type="text/css" href="css/home.css">

    <?php
        include "inc/style.php";
    ?>

</head>

<body>

    <?php
        include "inc/header.php";
    ?>
    
    <div id="wrapper">

        <div id="tijdlijn">

          <div id="nieuwepost">
          <p>Post je status:</p>
              <form method="POST" action="">
                    <textarea name="tekst"></textarea><Br>
                    <input type="submit"></input>
              </form>
          </div>

          <div class="post">
                <div class="naam"><p>Vincent Boon</p></div>
                <div class="content">Joris is een baas!</div>
          </div>
          <div class="post">
                <div class="naam"><p>Joris Verduin</p></div>
                <div class="content">hoi.</div>
          </div>
          <div class="post">
                <div class="naam"><p>Kylie van Altena</p></div>
                <div class="content">Jan smit is geweldig</div>
          </div>



        </div>

    </div>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>
