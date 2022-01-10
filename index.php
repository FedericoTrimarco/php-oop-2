<?php
    require_once __DIR__ . '/classes/user.php';
    require_once __DIR__ . '/classes/userPremium.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $user1 = new User('Federico Trimarco', 'PS5', 500);
    ?>
    <h1>UTENTE NORMALE</h1>
    <h2>Nome utente: <?php echo $user1->getName()?></h2>
    <h2>Prodotto: <?php echo $user1->getProduct()?></h2>
    <h2>Prezzo: <?php echo $user1->getPrice()?>€</h2>
    
    <hr>

    <?php 
        $user2 = new UserPremium('Don Diego', 'PS5', 500);
    ?>
    <h1>UTENTE PREMIUM</h1>
    <h2>Nome utente: <?php echo $user2->getName()?></h2>
    <h2>Prodotto: <?php echo $user2->getProduct()?></h2>
    <h2>Sconto: <?php echo $user2->discount?>%</h2>
    <h2>Prezzo: <?php echo $user2->getDiscount()?>€</h2>
</body>
</html>