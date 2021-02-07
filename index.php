<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACD</title>
</head>
<body>
    <?php

require '.\vendor\autoload.php';

echo "<h3>The Database connection class project</h3>";
     echo "<h6>by ACD &copy</h6>";


    $falaserio = new App\mvc\Models\Listar();
    $falaserio->Mostrar("SELECT * FROM noticia", null, null);
    


     
    ?>
</body>
</html>