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
    $quantity = '';
    $price = '';
    $discount_amount = '';
    $discounted_amout = '';
    $total_quantity = '';
    $total_discount_amount = '';
    $total_discounted_amount = '';
    $cash= '';
    $change = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $cash = $_POST['cash'];
    $total_quantity = $quantity;
    $total_discount_amount = ($quantity*$price)* .25;
    $total_discounted_amount = ($quantity*$price)- $total_discount_amount;
    $change = ($cash - $total_discounted_amount);

}
    
    
    
    ?>
</body>
</html>