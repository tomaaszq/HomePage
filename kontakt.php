<?php

// Tworzymy zmienną dla imienia i nazwiska
$name = $_POST['name'];

// Tworzymy zmienną dla adresu email
$email = $_POST['email'];

// Tworzymy zmienną dla wiadomości
$message = $_POST['message'];

// Podajesz adres email z którego ma być wysłana wiadomość
$odkogo = "tomaaszq95@gmail.com";

// Podajesz adres email na który chcesz otrzymać wiadomość
$dokogo = "tomaaszq95@gmail.com";

// Podajesz tytuł jaki ma mieć ta wiadomość email
$tytul = "Formularz kontaktowy z PORTFOLIO";

// Przygotowujesz treść wiadomości
$wiadomosc = "";
$wiadomosc .= "Kto: " . $name . "\n";
$wiadomosc .= "Email: " . $email . "\n";
$wiadomosc .= "Wiadomość: " . $message . "\n";

// Dodajemy UTF-8 do naglowka naszej wiadomości
$naglowek = "";
$naglowek .= "Od:" . $odkogo . " \n";
$naglowek .= "Content-Type:text/plain;charset=utf-8";
// Wysyłamy wiadomość
$sukces = mail($dokogo, $tytul, $wiadomosc, $naglowek);

// Przekierowywujemy na potwierdzenie
if ($sukces){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html\">";
}
else
{
	print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html\">";
}
?>