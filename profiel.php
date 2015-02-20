<?php
require_once "inc/profiel.php";

session_start();//Start de sessie

    if ( !isset($_SESSION["loggedin"]) )  header("Location: index.php");

    if (!$_SESSION["loggedin"]) header("Location: index.php");

    if ( isset($_GET['id']) ) {

        $profiel = new Profiel($_GET['id']);

        $id = $profiel->getId();
        $profielfoto = "userdata/img/default/profielfoto.png";
        $bio = "Deze gebruiker heeft nog niks over zichtzelf verteld"; 

    } else {

        $profiel = new Profiel($_SESSION['id']);

        $id = $profiel->getId();
        $profielfoto = "userdata/img/default/profielfoto.png";
        $bio = "<a href='aanpassen.php'>Vertel wat overjezelf</a>";   

    }
 
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Gezichtboek">
    <meta name="author" content="Gezichtboek">

    <title>Gezichtboek - Profiel</title>

    <!-- Onze CSS -->
    <link rel="stylesheet" type="text/css" href="css/profiel.css">

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
               
                <img id="profielfoto" src="<?php echo $profielfoto; ?>">

                <div id="naam"> <?php echo $profiel->getVoornaam() . " " . $profiel->getAchternaam(); ?> </div>

                <div id="bio"> <?php echo $bio; ?> </div>

            </div>

            <div id="vriendenlijst">
                Vriendenlijst<br>
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
    <script src="js/agency.js"></script>a

</body>

</html>
