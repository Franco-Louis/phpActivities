<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendo Machine</title>
</head>
<body>
    <h2>Vendo Machine</h2>
    <form method="post">
        <fieldset style ="width: 35%;" >
            <legend>Products:</legend>
            <input type="checkbox" name="products[]" id="coke" value="Coke"><label for="coke">Coke - P 15</label><br>
            <input type="checkbox" name="products[]" id="sprite" value="Sprite"><label for="sprite">Sprite - P 20</label><br>
            <input type="checkbox" name="products[]" id="royal" value="Royal"><label for="royal">Royal - P 20</label><br>
            <input type="checkbox" name="products[]" id="pepsi" value="Pepsi"><label for="pepsi">Pepsi - P 15</label><br>
            <input type="checkbox" name="products[]" id="mountainDew" value="Mountain Dew"><label for="mountainDew">Mountain Dew - P 20</label><br>
        </fieldset>
        
        <fieldset style ="width: 35%;">
            <legend>Options:</legend>
            <label for="size">Size</label>
            <select name="size" id="size">
                <option value="Regular">Regular</option>
                <option value="Large">Large</option>
            </select>

            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" id="quantity" min="1" value="0" style="width: 50px;">

            <input type="submit" name="btnCheckout" value="Check Out">
        </fieldset>
    </form>
    
    <?php
    // Define product prices in an associative array
    $productPrices = [
        "Coke" => 15,
        "Sprite" => 20,
        "Royal" => 20,
        "Pepsi" => 15,
        "Mountain Dew" => 20,
    ];

    if (isset($_POST['btnCheckout']) && isset($_POST['products']) && !empty($_POST['quantity'])) {
        $selectedProducts = $_POST['products'];
        $size = $_POST['size'];
        $quantity = $_POST['quantity'];
        $totalAmount = 0;
        $totalItems = count($selectedProducts) * $quantity;

        echo "<h3>Purchase Summary:</h3>";
        echo "<ul>";

        // Display each selected product with quantity, size, and price inside <li> tags
        foreach ($selectedProducts as $product) {
            $price = $productPrices[$product];
            $amountForProduct = $price * $quantity;
            $totalAmount += $amountForProduct;

            echo "<li>$quantity piece(s) of $size $product amounting to P $amountForProduct</li>";
        }

        echo "</ul>";
        // Display total items and amount outside the list
        echo "<p><strong>Total Number of Items:</strong> $totalItems</p>";
        echo "<p><strong>Total Amount:</strong> P $totalAmount</p>";
    }
    ?>
</body>
</html>
