<?php

//Her bliver header.php, som er vores menu, inkluderet på siden

	include 'header.php';
?>

<H1>Profilside</H1>
<p>Her kan du se dine informationer:</p>

<?php




// Her tjekkes først om man er logget ind og ellers kommer signup formen frem, så man kan registrere sig.
	if (isset($_SESSION['id'])) {
		echo "Navn: $Name";
		echo "Adresse: $Adress";
		echo "Kontaktnavn: $Contact";
		echo "Kontakt telefonnummer: $Phone";
		echo "Postnummer: $Zipcode";
		echo "Brugernavn: $uid";

	} 
?>
</body>
</html>