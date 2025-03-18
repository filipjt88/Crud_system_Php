<?php
 require_once 'core/connection.php';

 $errors = [];
 if($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);

    // Validacija forme
    if(empty($firstname)) {
        $errors[] = "Ime je obavezno";
    }
    if(empty($lastname)) {
        $errors[] = "Prezime je obavezno";
    }
    if(empty($email)) {
        $email[] = "Email je obavezan";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email nije validan";
    }

    
 }
?>