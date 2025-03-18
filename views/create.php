<?php
session_start();
require_once "../core/connection.php";

// Uzimamo greške iz sesije ako postoje
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
unset($_SESSION['errors']); // Obriši greške nakon prikazivanja
?>

<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj korisnika</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">

    <h2>Dodavanje korisnika</h2>

    <!-- Forma za dodavanje korisnika -->
    <form action="./../store.php" method="POST">
        <div class="mb-3">
            <label for="firstname" class="form-label">Ime:</label>
            <input type="text" class="form-control" name="firstname" value="<?php echo isset($_POST['firstname']) ? $_POST['firstname'] : ''; ?>">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Prezime:</label>
            <input type="text" class="form-control" name="lastname" value="<?php echo isset($_POST['lastname']) ? $_POST['lastname'] : ''; ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
        </div>

        <!-- Prikazivanje grešaka ako postoje -->
        <?php if (!empty($errors)): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <button type="submit" class="btn btn-primary">Dodaj korisnika</button>
    </form>

</body>
</html>
