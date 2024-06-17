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
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-dark text-light">
    <div class="container">
        <div class="row d-flex justify-content-center text-center position-absolute top-50 start-50 translate-middle">
            <div ><h2 class="mb-5 text-info">Ecco il tuo testo non censurato:</h2></div>
            <div class="mb-5"><h4><?php echo $frase ?> <br class="mb-3"> ed è lungo : <span class="text-danger"><?php echo strlen ($frase) ?></span> caratteri</h4></div>
            <div ><h2 class="text-info">Ecco il tuo testo censurato:</h2></div>
            <div ><h4><?php echo $filtered ?> <br class="mb-3"> ed è lungo : <span class="text-danger"><?php echo strlen ($filtered) ?></span>  caratteri</h4></div>
        </div>
    </div>
    
    
    

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>