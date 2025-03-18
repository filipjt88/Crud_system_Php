<?php

require_once 'core/connection.php';

// if($pdo) {
//     echo "Uspesno povezan sa bazom podataka";
// } else {
//     echo "Nije uspesno povezan sa bazom podataka";
// }

try {
    $stmt = $pdo->query("SELECT COUNT(*) FROM users");
    $count = $stmt->fetchColumn();
    echo "Konekcija sa bazom je uspesna! <br> Broj korisnika u bazi je:" .$count;
} catch(PDOException $e) {
    echo "Greska u upitu:" . $e->getMessage();
}

?>