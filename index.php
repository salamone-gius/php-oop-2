<?php
    require_once __DIR__ . '/classes/Product.php';
    require_once __DIR__ . '/classes/Food.php';
    require_once __DIR__ . '/classes/Toy.php';
    require_once __DIR__ . '/classes/User.php';
    require_once __DIR__ . '/classes/RegisteredUser.php';
    require_once __DIR__ . '/classes/CreditCard.php';

    $testProduct = new Product('spazzola', 4.50, 200, 'cane');
    var_dump($testProduct);

    $testFood = new Food('crocchette', 9.80, 100, 'gatto', 'secco', '31/12/2022');
    var_dump($testFood);

    $testToy = new Toy('bilanciere da riporto', 20.00, 50, 'cane', 'addestramento');
    var_dump($testToy);

    $testUser = new User('Pippo', 'Franco', 'pippo.franco@gmail.com', '0000 1111 2222 3333');
    var_dump($testUser);

    $testRegisteredUser = new RegisteredUser('Franco', 'Pippo', 'franco.pippo#gmail.com', '4444 5555 6666 7777');
    var_dump($testRegisteredUser);

    $testCreditCard = new CreditCard('8888 9999 0000 1111', 000, '31/12/2022', 'Visa');
    var_dump($testCreditCard);

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