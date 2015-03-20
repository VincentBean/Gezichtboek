<?php

require_once "inc/profiel.php";

session_start();

    if ( isset($_SESSION["loggedin"]) ) {
        if ($_SESSION["loggedin"]) {
            header("Location: profiel.php");
        }
    }

?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Gezichtboek">
    <meta name="author" content="Gezichtboek">

    <title>Gezichtboek</title>

    <!-- Onze CSS -->
    <link rel="stylesheet" type="text/css" href="css/index.css">

    <?php
        include "inc/style.php";
    ?>

</head>

<body>

   <!-- Navigation -->
    <nav class='navbar navbar-default navbar-fixed-top' style='height: 5%; padding: 0; margin-top: 1%;'>
        <div class='container'>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class='navbar-header '>
                <a class='navbar-brand' href='#' id="logo">Gezichtboek</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
                <ul class='nav navbar-nav navbar-right'>
                    <li>
                        <a class='loginbtn' href='#'>Inloggen</a>
                    </li>
                    <li>
                        <a class='registreerbtn' href='#'>Registreer</a>
                    </li>

                </ul>


            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
    <div id="wrapper">
	
	   <img src="img/header-bg.jpg" id="bg" alt="">

	   <header>

          <div class="container">

              <div class="intro-text">

                 <div class="intro-lead-in">Wel social media</div>

                   <div class="intro-heading">Geen onzin</div>

                   <a href="#" class="btn btn-xl registreerbtn" style="margin-bottom: 5%;">Registreer</a>

                   <br>

                   <a href="#" class="btn btn-xl loginbtn">Login</a>

                    <?php

                        if ( isset($_GET['loginerror']) ) {
                            echo "<br><br><p style='color: red; font-size: 1.4em;'>" . $_GET['loginerror'] . "</p>";
                        }

                        if ( isset($_GET['msg']) ) {
                            echo "<br><br><h4>" . $_GET['msg'] . "</h4>";
                        }
                    ?>

             </div>

          </div>

	   </header>

       <div id="loginbox">

            <div class="row text-center">

             <h3>Login:</h3>

                <form action="inc/login.php" method="POST" class="form-inline" >

                    <div class="form-group">

                        <input type="email" class="form-control" name="login-email" placeholder="E-mail" required>

                        <br><br>

                        <input type="password" class="form-control" name="login-wachtwoord" placeholder="Wachtwoord" required>

                        <br><br>

                        <input type="submit" class="btn btn-primary" value="Login">

                    </div>

                </form>

            </div>

       </div>

       <div id="registreerbox">

            <div class="row text-center" id="registreer">

                <h3>Registreer:</h3>

                <form action="inc/registreer.php" method="POST" class="form-inline" role="form">

                    <div class="form-group registreer">

                        <input type="text" class="form-control links" name="voornaam" placeholder="Voornaam" required>
                        <input type="text" class="form-control rechts" name="achternaam" placeholder="Achternaam" required>

                        <input type="password" class="form-control links" name="wachtwoord" placeholder="Wachtwoord" required>
                        <input type="password" class="form-control rechts" name="wachtwoordopnieuw" placeholder="Wachtwoord Herhalen" required data-validation-match-match="wachtwoord" data-validation-matches-message="Wachtwoord is niet hetzelfde">

                        <input type="email" class="form-control links" name="email" placeholder="E-mail" required>
                        <input type="email" class="form-control rechts" name="emailopnieuw" placeholder="E-mail Herhalen" required data-validation-matches-match="email" data-validation-match-message="E-mail is niet hetzelfde">

                        <input type="submit" class="btn btn-primary" value="Registreer">

                    </div>

                    <br><br>

                </form>

            </div>

       </div>


    </div>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/index.js"></script>

</body>

</html>
