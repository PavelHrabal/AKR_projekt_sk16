<?php
// Povolit zobrazení všech chyb
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Připojení k databázi
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <title>Zranitelný login + dotaz</title>
  <style>
    body {
      background-color: #2e2e2e;
      color: #f0f0f0;
      font-family: sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .container {
      text-align: center;
      background-color: #3a3a3a;
      padding: 40px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.5);
      width: 100%;
      max-width: 600px;
    }
    input, button {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      background-color: #444;
      color: #fff;
      border: 1px solid #666;
      border-radius: 4px;
    }
    h2 {
      border-bottom: 1px solid #666;
      padding-bottom: 5px;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
<div class="container">
<!-- Neošetřený vstup -->
  <h2>Hledat uživatele podle ID</h2>
  <form method="GET" action="user.php" autocomplete="off">
    <input type="text" name="id" placeholder="Zadejte ID">
    <button type="submit">Zobrazit</button>
  </form>
</div>

</body>
</html>
