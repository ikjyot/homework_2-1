<?php
  $product_description = filter_input(INPUT_POST, 'product_description');
  $list_price = filter_input(INPUT_POST, 'list_price');
  $discount_percentage = filter_input(INPUT_POST, 'discount_percent');
  $discount_amount = $list_price * $discount_percentage * .01;
  $discount_price = $list_price - $discount_amount;
  
  #Formatting the numeric data
  $list_price_format = "$".number_format($list_price, 2);
  $discount_percentage_format = $discount_percentage."%";
  $discount_amount_format = "$".number_format($discount_amount, 2);
  $discount_price_format = "$".number_format($discount_price, 2);

?>


<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Product Discount Calculator</h1>
        <label>Product Description:</label>
        <span><?php echo htmlspecialchars($product_description); ?></span><br>

        <label>List Price:</label>
        <span><?php echo htmlspecialchars($list_price_format); ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo htmlspecialchars($discount_percentage_format); ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_amount_format; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $discount_price_format; ?></span><br>
    </main>
</body>
</html>
