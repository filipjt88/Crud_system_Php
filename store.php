<?php
require_once "core/connection.php";

// Definiši promenljive za greške
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = trim($_POST["firstname"]);
    $lastname = trim($_POST["lastname"]);
    $email = trim($_POST["email"]);

    // Validacija
    if (empty($firstname)) {
        $errors[] = "Ime je obavezno.";
    }
    
    if (empty($lastname)) {
        $errors[] = "Prezime je obavezno.";
    }
    
    if (empty($email)) {
        $errors[] = "Email je obavezan.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email nije validan.";
    }

    // Ako nema grešaka, unosimo podatke u bazu
    if (empty($errors)) {
        try {
            $stmt = $pdo->prepare("INSERT INTO users (firstname, lastname, email) VALUES (:firstname, :lastname, :email)");
            $stmt->bindParam(":firstname", $firstname);
            $stmt->bindParam(":lastname", $lastname);
            $stmt->bindParam(":email", $email);

            if ($stmt->execute()) {
                header("Location: ../views/create.php?success=1"); // Redirekcija sa porukom o uspehu
                exit();
            } else {
                $errors[] = "Greška pri unosu podataka u bazu.";
            }
        } catch (PDOException $e) {
            $errors[] = "Greška pri konekciji: " . $e->getMessage();
        }
    }
}
?>

<?php 
// Ako postoji greška u validaciji, ponovo prikazujemo formu sa greškama
if (!empty($errors)) {
    // Ovdje dodajemo greške u sesiji ili prikazujemo direktno na stranici, zavisno od toga kako organizuješ kod
    $_SESSION['errors'] = $errors;
    header("Location: ../views/create.php");
    exit();
}
?>
