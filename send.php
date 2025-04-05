<?php
$config = require 'config.php';


// 1. Podaci iz forme
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// 2. Mailgun API info, ali se nalaze u drugom fajlu
$apiKey = $config['api_key'];
$domain = $config['domain'];

// 3. Priprema podataka za slanje
// curl je alat koji šalje HTTP zahteve iz PHP-a. Mi ga koristimo da pošaljemo podatke Mailgun API-ju
$ch = curl_init(); // Otvara se tzv. curl sesija – to je kao kad uzmeš telefon da zoveš nekoga. Ovaj $ch je „slušalica“ kroz koju komuniciraš sa Mailgun serverom

curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC); // Kažemo da želimo da koristimo Basic Auth (osnovni način prijave). To znači da ćemo u sledećem koraku proslediti korisničko ime i lozinku (u našem slučaju – API ključ).
curl_setopt($ch, CURLOPT_USERPWD, 'api:' . $apiKey); // Ovde šaljemo korisničko ime i lozinku za API pristup. Mailgun očekuje da korisničko ime bude api, a lozinka tvoj pravi API ključ (npr. da64...).
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Kažemo curl-u da nam vrati rezultat kao string (tekst), a ne da ga samo ispiše odmah. To nam omogućava da proverimo da li je slanje uspelo ili nije.

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST'); //Kažemo: "Hej, šaljemo POST zahtev", tj. podatke unosimo (ne čitamo sa sajta).
curl_setopt($ch, CURLOPT_URL, "https://api.mailgun.net/v3/$domain/messages");//  Ovde šaljemo poruku na pravi Mailgun URL. $domain je onaj sandbox domen koji si dobio pri kreiranju naloga.
//OVDE IDE TEKST PORUKE
curl_setopt($ch, CURLOPT_POSTFIELDS, [
    'from' => 'Contact Form <mailgun@sandbox0abde0259ed9499ea3995fbd3e98bb47.mailgun.org>',
    'to' => 'stefanvujic02@gmail.com',
    'subject' => 'New message from website',
    'text' => "Name: $name\nEmail: $email\nMessage: $message"
]);

// 4. Slanje emaila
$result = curl_exec($ch); // Sad se curl pokreće – i zaista šalje sve te podatke Mailgun-u!

//Ako nešto nije u redu, piše ti gde je greška (npr. API key nije dobar).
if ($result === false) {
    echo 'Error: ' . curl_error($ch);
} else {
    echo 'Message is sent successfully!';
}

curl_close($ch); //  Zatvaramo curl sesiju. Kao kad spustiš slušalicu nakon razgovora. 
?>
