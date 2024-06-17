<?php
$frase = $_GET['textbox'];
$filtro = "stronzo";
$filtered = str_replace($filtro, '***', $frase);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words Filtered</title>
</head>
<body>
    <h2>Ecco il tuo testo non censurato:</h2>
    <h4><?php echo $frase ?> ed è lungo : <?php echo strlen ($frase) ?> caratteri</h4>
    <h2>Ecco il tuo testo censurato:</h2>
    <h4><?php echo $filtered ?> ed è lungo : <?php echo strlen ($filtered) ?> caratteri</h4>
</body>
</html>