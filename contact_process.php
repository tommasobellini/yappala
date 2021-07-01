<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['number']))
$number = $_POST['number'];
if(isset( $_POST['jobname']))
$jobname = $_POST['jobname'];
if(isset( $_POST['message']))
$message = $_POST['message'];

if ($name === ''){
echo "Compila il nome.";
die();
}
if ($jobname === ''){
echo "Compila il nome attività.";
die();
}
if ($email === ''){
echo "Email non valida.";
die();
} else {
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Email non valida.";
die();
}
}
if ($message === ''){
echo "Il messaggio non può essere vuoto.";
die();
}
if ($number === ''){
	$content="Da: $name \nEmail: $email \nNumero di telefono: $number \nMessaggio: $message";
} else {
	$content="From: $name \nNumero di telefono: '' \nEmail: $email \nMessage: $message";
}
$recipient = "bellinitom97@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, "Richiesta informazioni", $content, $mailheader) or die("Errore invio email!");
echo "Email inviata!";
?>