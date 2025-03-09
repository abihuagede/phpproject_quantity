<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>quantity</label>
        <input type="number" name="quantity" id="">
        <button type="submit">send order</button>
    </form>
</body>

</html>

<?php

$item = "pizza";
$quantity = $_POST['quantity'];
$price = 4.99;
$total = $quantity * $price;

echo "Item:{$item} <br> price: \${$price} <br> Order quantity:  {$quantity}x <br> Your Total Price:\$ {$total}"
?>