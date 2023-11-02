<?php


/*
/	Deze php-file ontvangt de informatie uit het contactformulier,
/	en zet de gegevens in een tekstbestand.
/
/	De file werkt al, je hoeft zelf geen php-code te schrijven.
/
*/


if ($_POST['action'] == "send") {
	$onderwerp = $_POST['senderOnderwerp'];
	$name = $_POST['senderName'];
	$telefoonnummer = $_POST['senderTelefoonNummmer'];
	$email = $_POST['senderEmail'];
	$bsn = $_POST['senderBsnNUmmer'];
	$message = $_POST['message'];
	$to = "florismelchers@gmail.com";

	var_dump($_POST);
	file_put_contents(
		"contacts.txt",

		"------------------------------
Onderwerp: " . $onderwerp . "
Bericht van:	" . $name . "
Telefoonnummer: " . $telefoonnummer . "
Email: " . $email . "
BSN: " . $bsn . "
Bericht:" . $message . "
------------------------------",

		FILE_APPEND
	);


	/*
	//Onderstaande code mailt het bericht ook - WERKT NIET OP XAMPP

	mail($to, "Contactformulier van website",
		"------------------------------
		Bericht van: " . $name . " (" . $email . ")
		" . $message . "
		------------------------------",
	)
*/


	header("Location: ../meldingen.php?msg=Bericht+verstuurd");
}
