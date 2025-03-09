<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="indes.php" method="post">
        <input type="checkbox" name="item[]" id="pizza" value="pizza">
        <label for="pizza">Pizza</label><br>
        <input type="checkbox" name="item[]" id="bread" value="bread">
        <label for="bread">Bread</label><br>
        <input type="checkbox" name="item[]" id="yam" value="yam">
        <label for="yam">Yam</label><br>
        <input type="checkbox" name="item[]" id="rice" value="rice">
        <label for="rice">Rice</label><br>
        <input type="checkbox" name="item[]" id="lemon" value="lemon">
        <label for="lemon">Lemon</label><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>

<?php
if (isset($_POST["submit"])) {
    if (!empty($_POST["item"])) {
        $food = $_POST["item"];
        foreach ($food as $item) {
            echo htmlspecialchars($item) . "<br>";
        }
    } else {
        echo "No items selected";
    }
}
?>