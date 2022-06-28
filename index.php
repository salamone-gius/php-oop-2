<?php
    require_once __DIR__ . '/classes/Product.php';

    $product = new Product('spazzola', 4.50, 200, 'cane');
    echo "<pre>";
    var_dump($product);
    echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP OOP 2</title>
    </head>
    <body>
    </body>
</html>