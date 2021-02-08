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

        require_once 'Core\Config.php';
        require '.\vendor\autoload.php';

        echo "<h3>The Database connection class project</h3>";
        echo "<h6>by ACD &copy</h6>";
        
        /* examples */
        $Create = "INSERT INTO news(title , description) VALUES ('Title 28', 'News 28')";
        $Read=    "SELECT * FROM news";
        $Update = "UPDATE news SET title='Title 27', description='News 27' WHERE id = 27 ";
        $Delete = "DELETE FROM news WHERE id = :id";

        /* instantiating the class */
        $Instance = new \App\mvc\Models\helper\Crud();

        /* Create example */
        $Instance->create($Create,$Parameters=null,$Instance);

        /* Read example */
        $Instance->read($Read, $Parameters=null,$Instance);

        /* Update example */
        $Instance->update($Update,$Parameters=null,$Instance);

        /* Delete example */
        $id = 10;
        $Parameters = array(':id' => $id);
        $Instance->delete($Delete,$Parameters,$Instance);
          
    ?>
</body>
</html>