
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
                <a class='navbar-brand' href='index.php'>Gezichtboek</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
                <ul class='nav navbar-nav navbar-right'>
                    <li>
                        <a href='home.php'>Inloggen</a>
                    </li>
                    <li>
                        <a href='chat.php'>Registreer</a>
                    </li>
                    <li>
                        <a href='profiel.php'>Over</a>
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
                <a href="#registreer" class="btn btn-xl">Registreer</a>
            </div>
        </div>
	</header>
    </div>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>
