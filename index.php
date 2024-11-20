<?php $name = "achraf";$$name = "sikal"; $age = 25; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $name;
    echo '<br>';
    echo 'hello php world';
    echo "<h1>hello world my name is $name</h1>";
    var_dump((bool) "");
    echo "<br>";
    var_dump((bool) array(1));
    echo "<br>";
    var_dump((bool) []);
    echo "<br>";
    var_dump((bool) 0);
    echo "<br>";
    ?>
    <?php include("main.php") ?>
</body>
</html>