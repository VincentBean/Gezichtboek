<?php
/*
	Bestand: PasswordEncryptor.php
	Gemaakt: 12-12-2014
	Door: Vincent Boon
	Omschrijving:
		Klasse wachtwoorden encrypt en chat

	Laatst gewijzigd: -
*/

class PasswordEncryptor {

	/*
		Encrypt het wachtwoord met een SHA1 encryptie.

		@arg password
		@return encrypted password
	*/
	function encrypt($password) {
		return sha1($password);
	}


	/*
		Check of het $password hetzelfde is als $encryptedpassword

		@arg password - orginele wachtwoord
		@arg encryptedPassword - wachtwoord met encryptie
		@return bool - wachtwoord hetzelfde
	*/
	function check($password, $encryptedPassword) {
		return (sha1($password) == $encryptedPassword);
	}

}

?>