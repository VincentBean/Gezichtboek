<?php
/*
	Bestand: profiel.php
	Gemaakt: 30-01-2014
	Door: Vincent Boon
	Omschrijving:
		Houd een profiel van een gebruiker.

	Laatst gewijzigd: -
*/
require_once("database.php");

class Profiel {

	private $database;
	private $profielGevonden;
	private $id;
	private $voornaam;
	private $achternaam;
	private $email;
	private $bio;
	private $registratiedatum;

	function __construct($id) {

		$this->database = new Database();

		$query = "SELECT * FROM gebruikers WHERE id='" . $id . "';";
		$resultaat = $this->database->query($query);

		if (mysqli_num_rows($resultaat) == 1) {
				
			$resultaat_array = mysqli_fetch_assoc($resultaat);

			$this->voornaam = $resultaat_array["voornaam"];
			$this->achternaam = $resultaat_array["achternaam"];
			$this->email = $resultaat_array["email"];
			$this->bio = $resultaat_array["bio"];
			$this->registratiedatum = $resultaat_array["registratiedatum"];

			$this->profielGevonden = true;

		} else {

			$this->profielGevonden = false;

		}

	}

	public static function laadMetIngelogd() {

		$instance = new self($_SESSION['id']);
		
		return $instance;
	}

	function profielGevonden() { return $this->profielGevonden; }
	function getId() { return $this->id; }
	function getVoornaam() { return $this->voornaam; }
	function getAchternaam() { return $this->achternaam; }
	function getEmail() { return $this->email; }
	function getBio() { return $this->bio; }
	function getRegistratiedatum() { return $this->registratiedatum; }

}

?>
