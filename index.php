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
    <title>Inicio | Fastery</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link  rel="icon"   href="img/icon.png" type="image/png" />
    <link rel="stylesheet" href="/assets/css/index.css">
    
  </head>
  <body>
    <?php require 'partials/header.php' ?>

    <?php if(!empty($user)): ?>
      <div class="login-box">
      <h4> Bienvenido <?= $user['email']; ?>
      <a href="logout.php">
        Logout
      </a>
      </div>
    <?php else: ?>
      <div class="login-box">
      <center><h1>Fastery</h1></center>
      <center>
      <a href="login.php">Iniciar Sesion</a> o
      <a href="signup.php">Registar</a>
      </center>
      </div>
      
 
    <?php endif; ?>
  </body>
</html>
