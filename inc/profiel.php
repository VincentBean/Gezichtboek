<?php
/*
	Bestand: profiel.php
	Gemaakt: 30-01-2014
	Door: Vincent Boon
	Omschrijving:
		Houd een profiel van een gebruiker.

	Laatst gewijzigd: 
		- 20-02-2015
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
	private $profielfoto;


	/*
		Constructor, laad gegevens automatisch van de id die word meegegeven
		Als het profiel niet gevonden is dan word $profielGevonden of false gezet.

		@arg $id - id van de gebruiker
	*/
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

			if ( $resultaat_array["profielfoto"] == NULL) {
				$this->profielfoto = "userdata/img/default/profielfoto.png";
			} else {
				$this->profielfoto = "userdata/img/" . $id . "/" . $resultaat_array["profielfoto"];

				if (!file_exists($this->profielfoto)) {
					$this->profielfoto = "userdata/img/default/profielfoto.png";
				}

			}	

			$this->profielGevonden = true;

		} else {

			$this->profielGevonden = false;

		}

	}

	/*
		Om het profiel te laden van de ingelogde gebruiker

		@return Profiel - de klasse met gegevens van de ingelogde gebruiker.
	*/
	public static function laadMetIngelogd() {

		$instance = new self($_SESSION['id']);
		
		return $instance;
	}

	/*
		Getters voor de gegevens

		@return profiel gegeven
	*/
	function profielGevonden() { return $this->profielGevonden; }
	function getId() { return $this->id; }
	function getVoornaam() { return $this->voornaam; }
	function getAchternaam() { return $this->achternaam; }
	function getEmail() { return $this->email; }
	function getBio() { return $this->bio; }
	function getRegistratiedatum() { return $this->registratiedatum; }
	function getProfielfoto() { return $this->profielfoto; }
}

?>
