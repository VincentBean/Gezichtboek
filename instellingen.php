<?php
/*
    Bestand: instellingen.php
    Gemaakt: 25-03-2015
    Door: Vincent Boon
    Omschrijving:
        Pagina voor de instellingen van de profielen van de gebruikers.
        Gebruikers kunnen hier hun bio en profielfoto instellen.

    Laatst gewijzigd: -
*/
require_once "inc/profiel.php";

session_start();

    if ( !isset($_SESSION["loggedin"]) )  header("Location: index.php");

    if (!$_SESSION["loggedin"]) header("Location: index.php");

    $profiel = Profiel::laadMetIngelogd();

    $id = $profiel->getId();

    if ($profiel->getBio() != "") {

     	$bio = $profiel->getBio();

    } else {
      	$bio = "Nog geen bio ingesteld.";

    }
    
 
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Gezichtboek">
    <meta name="author" content="Gezichtboek">

    <title>Gezichtboek - Instellingen</title>

    <!-- Onze CSS -->
    <link rel="stylesheet" type="text/css" href="css/instellingen.css">

    <?php
        include "inc/style.php";
    ?>

</head>

<body>

    <?php
        include "inc/header.php";
    ?>
    
    <div id="wrapper">

        <div id="links">

           <div id="profielinfo">

                <div id="naam"><p id="naamtekst"><?php echo $profiel->getVoornaam() . " " . $profiel->getAchternaam(); ?> </p>
                <div class="klein">Aanpassen</div></div>

                <img id="profielfoto" src="<?php echo $profiel->getProfielfoto(); ?>">

                <div id="bio"> <strong>Bio:</strong><br><?php echo $bio; ?> </div>

            </div>

        </div>

        <div id="rechts">

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
