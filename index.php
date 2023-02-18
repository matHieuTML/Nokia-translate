<?php
include 'Nokia.php';
$phrase1 = new Nokia;
$phrase1->phrase = @$_GET['test'];
$phrase1->convert();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nokia</title>
</head>
<body>
    <form action="" method="get">
        <label for="test"></label>
        <input type="text" name="test" id="test">
        <button>Convertir</button>
    </form>
</body>
</html>