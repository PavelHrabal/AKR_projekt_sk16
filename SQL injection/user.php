<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <title>Výpis uživatele</title>
  <style>
    body {
      background-color: #2e2e2e;
      color: #f0f0f0;
      font-family: sans-serif;
      padding: 30px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    th, td {
      border: 1px solid #666;
      padding: 10px;
    }
  </style>
</head>
<body>

<h2>Výsledky dotazu</h2>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Zranitelný dotaz
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Uživatelské jméno</th><th>Heslo</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>{$row['id']}</td><td>{$row['username']}</td><td>{$row['password']}</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Uživatel nenalezen.</p>";
    }
}
?>

</body>
</html>
