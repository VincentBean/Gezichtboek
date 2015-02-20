<?php

/*
	Bestand: Database.php
	Gemaakt: 11-12-2014
	Door: Vincent Boon
	Omschrijving:
		Klasse die verbinding maakt met de database

	Laatst gewijzigd: -
*/
class Database {

	// Properties LET OP: inloggegevens weghalen!
    private $databaseHost = "127.0.0.1";
    private $databaseUser = "";
    private $databasePassword = "";
    private $database = "";
    private $connection;

    /*
		Constructor, maakt de verbinding. Als de verbinding is mislukt geven we dat aan.
    */
	function __construct() {
		$this->connection = mysqli_connect($this->databaseHost, $this->databaseUser, $this->databasePassword, $this->database) or die("<h1 style='color: red;'>Een fout is opgetreden bij het verbinden met de database</h1> " . mysqli_error($connection));
	}

	/*
		Voer een query uit op de database

		@return resultaat van de uitgevoerde query
	*/
	function query($query) {
		return mysqli_query($this->connection, $query);
	}

	function sluit() {
		mysqli_close($connection);
	}

}




?>
