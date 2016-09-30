<?php

// Nedenfor er login info til databasen, som bliver gemt i en variabel der hedder $conn.

$conn = mysqli_connect("localhost", "slackdk_webdb_admin", "Abel1980", "slackdk_webdb");

// Nedenfor bliver der testet om forbindelsen til databasen er i orden, og ellers bliver der sendt en fejlbesked tilbage

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
