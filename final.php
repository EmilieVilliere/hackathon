<?php
session_start();

if(isset($_GET['power'])) {
    $power = $_GET['power'];
    $_SESSION['3'] = $power;
}
?>

!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="card" style="width: 18rem;">
            <img src="" class="card-img-top" alt="unPerso">
            <div class="card-body">
                <p class="card-text"><?= $_SESSION['power1']; ?></p>
                <p class="card-text"><?= $_SESSION['power2']; ?></p>
                <p class="card-text"><?= $_SESSION['power3']; ?></p>
            </div>
        </div>
    </div>
</body>
</html>