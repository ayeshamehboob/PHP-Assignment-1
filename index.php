<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Assignment-1</title>
</head>
<body>

    <h1>Order Page</h1>

    <form method="post" action="">
        <label for="item">Select Item:</label>
        <select name="item" id="item">
            <option value="dress">Dress - $400.00</option>
            <option value="shoes">Shoes - $350.00</option>
            <option value="bag">Bag - $550.00</option>
        </select>

        <br><br>

        <label for="quantity">Select Quantity:</label>
        <input type="number" name="quantity" id="quantity" min="1" max="100">
        
        <br><br>

        <input type="submit" name="submit" value="Total">
    </form>

    <?php
    $itemPrices = [
        "dress" => 400,
        "shoes" => 350,
        "bag" => 550
    ];    
    
    if (isset($_POST['submit'])) {
        $slectedItem = $_POST['item'];
        $quantity = (int)$_POST['quantity'];

        if (array_key_exists($slectedItem, $itemPrices)) {
            $price = $itemPrices[$slectedItem];
            $total = $price * $quantity;

            echo "<br><br>";
            echo "<strong>Order Summery:</strong><br>";
            echo "Item: . $slectedItem . <br>";
            echo "Quantity: $quantity <br>";
            echo "Total Price: $.$total" ;
        } else {
            echo "<br><br>";
            echo "<strong>Invalid Item selected. </strong>";
        }
    }

 ?>
    
</body>
</html>







