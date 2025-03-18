<?php require_once "../core/connection.php"; ?>

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
    
    <form action="../core/store.php" method="POST">
        <div class="mb-3">
            <label for="firstname" class="form-label">Ime:</label>
            <input type="text" class="form-control" name="firstname">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Prezime:</label>
            <input type="text" class="form-control" name="lastname">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" name="email">
        </div>
        <button type="submit" class="btn btn-primary">Dodaj korisnika</button>
    </form>

</body>
</html>
