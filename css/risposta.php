<!doctype html>
<html>
<head>
<title>Registrazione prenotazione</title>
</head>
<body>
<h2>Conferma registrazione</h2>
</hr>
<?php
$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$email = $_POST["email"];

echo "La richiesta di prenotazione a nome di $nome $cognome è stata registrata. <br/>";
echo " Riceverai tutti i dettagli e il bigletto stampabile all' indirizzo $email. <br/>";
?>

<?php 
$file=fopen ("prenotazione","a");

if (!$file) {
	echo "<p>Impossibile aprire il file remoto per la scrittura.</p>";
	exit;
}

fwrite($file, "$nome"." "."$cognome"."  "."$email"."\n");
fclose ($file);
?>