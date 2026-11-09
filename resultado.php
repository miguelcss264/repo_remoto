<?php

session_start();
$secret = $_SESSION['secret'];
$won = $_SESSION['won'];

?>

<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Resultado</title>
</head>
<body>
  <div class="result">
    <?php if ($won): ?>
      <h3>¡Correcto! El número era <?= htmlspecialchars($secret) ?>.</h3>
    <?php else: ?>
      <h3>¡Has perdido! El número era <?= htmlspecialchars($secret) ?>.</h3>
    <?php endif; ?>
    <p><a href="index.php?reset=1"><button>Jugar otra vez</button></a></p>
  </div>
</body>
</html>