<?php
// PDO
$host = 'localhost';
$dbname = 'crud_app';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttributte(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Greska sa povezivanjem sa bazom:" . $e->getMessage());
}

/* $pdo = new PDO(...) – Kreira konekciju sa bazom podataka.
"mysql:host=$host;dbname=$dbname;charset=utf8" – Definiše tip baze, host, ime baze i charset.
setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) – Omogućava prikazivanje grešaka.
catch (PDOException $e) – Hvata greške pri konekciji i ispisuje poruku. */
?>