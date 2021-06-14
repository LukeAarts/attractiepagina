<?php

//Haal de configuratie op
require_once 'config.php';

//Met behulp van PDO zetten we de connectie op, waarna we met setAttribute de manier van errormeldingen weergeven bepalen.
$conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

<?php

//IEDER VOOR ZICH:

#### TODO
//Hernoem dit bestand naar 'config.php' en vul jouw eigen database-gegevens in.
//Deze config wordt hierna _niet_ meegestuurd naar je groepsgenoten. Zo kan iedereen zijn eigen wachtwoord, etc. invullen.

$dbHost = 'localhost';
$dbName = 'attractiepagina';
$dbUser = 'root';
$dbPass = '';

//De url waarop jouw project staat. Géén slash aan het einde.
$base_url = 'http://localhost/attractiepagina';
