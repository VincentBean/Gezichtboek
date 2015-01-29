<?php

	if (isset($_POST['voornaam'])) { // registratie

		$voornaam = $_POST["voornaam"];
		$achternaam = $_POST["achternaam"];
		$wachtwoord = $_POST["wachtwoord"];
		$email = $_POST["email"];
		$persoonlijke_info = $_POST["persoonlijke_info"];
		$leeftijd = $_POST["leeftijd"];



	}

?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gezichtboek</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Onze CSS -->
    <link rel="stylesheet" type="text/css" href="css/index.css">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" type="image/png" href="img/favicon.png">

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Gezichtboek</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#login">Inloggen</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#registreer">Registreer</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#over">Over</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Wel social media</div>
                <div class="intro-heading">Geen onzin</div>
                <a href="#registreer" class="page-scroll btn btn-xl">Registreer</a>
            </div>
        </div>
    </header>

    <!-- Login Section -->
    <section id="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Login</h2>
                </div>
            </div>

            <div class="row text-center">

                <form action="login.php" method="POST" class="form-inline" >

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
    </section>

    <!-- Registreer Section -->
    <section id="registreer" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Registreer</h2>
                </div>
            </div>

            <div class="row text-center">

                <form action="registreer.php" method="POST" class="form-inline" role="form">

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

    </section>

    <!-- Over Section -->
    <section id="over">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Over</h2>
                    <h3 class="section-subheading text-muted">Gezichtboek is een hobbyproject van de leden van IB1C.</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script>
  		$(function () { $("input").not("[type=submit]").jqBootstrapValidation(); } );
	</script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>a

</body>

</html>
