
<?php
        $productDescription = filter_input(INPUT_POST, 'product_description');
        $listPrice = filter_input(INPUT_POST, 'list_price');
        $formatListPrice = '$'.number_format($listPrice, 2);
        $discountPercent = filter_input(INPUT_POST, 'discount_percent');
        $formatDiscountPercent = $discountPercent.'%';

        $discountAmount = $listPrice * $discountPercent * .01;
        $formatDiscountAmount = '$'.number_format($discountAmount, 2);
        $discountPrice = $listPrice - $discountAmount;
        $formatDiscountPrice = '$'.number_format($discountPrice, 2);
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
        <span><?php echo htmlspecialchars($productDescription); ?></span><br>

        <label>List Price:</label>
        <span><?php echo htmlspecialchars($formatListPrice); ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo htmlspecialchars($formatDiscountPercent); ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $formatDiscountAmount; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $formatDiscountPrice; ?></span><br>
    </main>
</body>
</html>