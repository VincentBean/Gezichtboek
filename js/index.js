/*
    Bestand: index.php
    Gemaakt: 20-02-2015
    Door: Vincent Boon
    Omschrijving:
        Zorgd ervoor dat het login en registreerformulier word weergegeven als er op een knop word gedrukt.
        Ook word er een fade animatie gebruikt.

    Laatst gewijzigd: -
*/
$(document).ready(function() {

	$('#loginbox').hide();
	$('#registreerbox').hide();

	$('#logo').click(function() {		
		showLogo();	
	});

	$('.loginbtn').click(function() {
		showLogin();	
	});

	$('.registreerbtn').click(function() {
		showRegister();		
	});

});

function showLogin() {

	if ( $("#registreerbox:visible") ) {
		$('#registreerbox').fadeOut("fast");
	}

	if ( $("header:visible") ) {
		$('header').fadeOut("fast");
	}

	$('#loginbox').delay(600).fadeIn("fast");

}

function showRegister() {

	if ( $("#loginbox:visible") ) {
		$('#loginbox').fadeOut("fast");
	}

	if ( $("header:visible") ) {
		$('header').fadeOut("fast");
	}

	$('#registreerbox').delay(600).fadeIn("fast");
	
}

function showLogo() {

	if ( $("#registreerbox:visible") ) {
		$('#registreerbox').fadeOut("fast");
	}

	if ( $("#loginbox:visible") ) {
		$('#loginbox').fadeOut("fast");
	}

	$('header').delay(600).fadeIn("fast");
	
	
}