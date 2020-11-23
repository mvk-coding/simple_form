<?php
echo "hallo";

 echo "<br />";

//Check if gender is set
//if not set or null -> ask to fill gender
if (!isset($_POST["gender"])|| $_POST["gender"] == NULL) {
	echo "Vul gender in";
//otherwise -> show gender on screen
} else {
	echo $_POST["gender"];
}

 echo "<br />";

//Check if first name is set
//if not set or null -> ask to fill first name
if (!isset($_POST["voornaam"]) || $_POST["voornaam"] == NULL) {
	echo "Vul voornaam in";
//otherwise -> show first name on screen
} else {
	echo $_POST["voornaam"];
}

 echo " ";

//Check if last name is set
//if not set or null -> ask to fill last name
if (!isset($_POST["achternaam"])|| $_POST["achternaam"] == " " || $_POST["achternaam"] == NULL) {
	echo "Vul achternaam in";
//otherwise -> show last name on screen
} else {
	echo $_POST["achternaam"];
}

 echo "<br />";

//Check if street name is set
//if not set or null -> ask to fill street name
if (!isset($_POST["straat"])|| $_POST["straat"] == " " || $_POST["straat"] == NULL) {
	echo "Vul straat in";
//otherwise -> show street name on screen
} else {
	echo $_POST["straat"];
}

 echo " ";

//Check if house number is set
//if not set or null -> ask to fill house number
if (!isset($_POST["huisnummer"])|| $_POST["huisnummer"] == " " || $_POST["huisnummer"] == NULL) {
	echo "Vul huisnummer in";
//otherwise -> show house number on screen
} else {
	echo $_POST["huisnummer"];
}

echo " ";

//Check if annex is set
//if not set or null -> leave annex empty
if (!isset($_POST["toevoeging"])|| $_POST["toevoeging"] == " " || $_POST["toevoeging"] == NULL) {
	echo " ";
//otherwise -> show annex on screen
} else {
	echo $_POST["toevoeging"];
}

 echo "<br />";

//Check if zip code is set
//if not set or null -> ask to fill zip code
if (!isset($_POST["postcode"])|| $_POST["postcode"] == " " || $_POST["postcode"] == NULL) {
	echo "Vul postcode in";
//otherwise -> show zip code on screen
} else {
	echo $_POST["postcode"];
}

 echo " ";

//Check if city is set
//if not set or null -> ask to fill city
if (!isset($_POST["woonplaats"])|| $_POST["woonplaats"] == " " || $_POST["woonplaats"] == NULL) {
	echo "Vul woonplaats in";
//otherwise -> show city on screen
} else {
	echo $_POST["woonplaats"];
}

 echo "<br />";

//Check if telephone number is set
//if not set or null -> ask to fill telephone number
if (!isset($_POST["telnr"])|| $_POST["telnr"] == " " || $_POST["telnr"] == NULL) {
	echo "Vul telefoonnummer in";
//otherwise -> show telephone number on screen
} else {
	echo $_POST["telnr"];
}

 echo "<br />";

//Check if comments is set
//if not set or null -> show N/A on screen
if (!isset($_POST["opmerkingen"])|| $_POST["opmerkingen"] == " " || $_POST["opmerkingen"] == NULL) {
	echo "nvt";
//otherwise -> show comments on screen
} else {
	echo $_POST["opmerkingen"];
}
 ?>

