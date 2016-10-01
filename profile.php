<?php
session_start();
// Vi starter en session her.

// Include bliver brugt til at loade database connection filen.

include 'dbcon.php';

//Her bliver header.php, som er vores menu, inkluderet på siden

	include 'header.php';
?>

<?php



// Nedenfor bliver de forskellige variabler lavet, så de svarer til de data der skal sendes til databasen.

$Name = $_POST['Name'];
$Adress = $_POST['Adress'];
$Contact = $_POST['Contact'];
$Phone = $_POST['Phone'];
$Zipcode = $_POST['Zipcode'];
$uid = $_POST['uid'];

// Her tjekkes først om man er logget ind og ellers kommer signup formen frem, så man kan registrere sig.
	if (isset($_SESSION['id'])) {

		// Nedenfor bliver sql statements lavet, til at tjekke de indtastede værdier fra brugeren, i formen til at logge ind på hjemmesiden, og hvis username eller password er forkert, kommer der en fejlbesked.

		$conn = mysqli_connect($servername, $username, $password, $table);

		$uid = $_SESSION['id'];

		$sql = "SELECT * FROM Client WHERE id='$uid'";
		$result = mysqli_query($conn, $sql);


		// Indsætter den hentede række i en array fra det id der er hentet fra databasen. 
		$row = mysqli_fetch_assoc($result);


		echo "


		<H1>Profilside</H1>
		<p>Her kan du se dine informationer:</p>
		<br>
			<p>id:</p>" . $row['id'] . "
			<p>Navn:</p>" . $row['Name'] . "
			<p>Adresse:</p>" . $row['Adress'] . "
			<p>Kontakt:</p>" . $row['Contact'] . "
			<p>Telefon:</p>" . $row['Phone'] . "
		<br><br>


		";	


	} else {
		echo "Du skal være logget ind for at se dine profil oplysninger";
	}

?>




</body>
</html>
