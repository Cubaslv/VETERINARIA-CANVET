<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BIENVENIDO CUBAS Y </title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <?php require 'partials/header.php' ?>

    <?php if(!empty($user)): ?>
      <br> BIENVENIDO ;3 . <?= $user['email']; ?>
      <br>Has iniciado sesión correctamente
      <a href="logout.php">
        CERRAR CESION
      </a>
    <?php else: ?>
      <h1>PORFAVOR INGRESE O REGISTRESE CUBAS Y </h1>

      <a href="login.php">INGRESAR</a> or
      <a href="signup.php">REGISTRARSE</a> 
      <br> <br> 
      <?php
      echo "hola papa" ;

       ?>
    <?php endif; ?>
  </body>
</html>