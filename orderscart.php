<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="main.css" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Aleo&display=swap');
  </style>
</head>
<body>
<?php
    include("connection.php");
    include("header.php");
    session_start();

    $productId = isset($_GET['id']) ? $_GET['id'] : 0;
    $sql = "select * from product where product_id = '$productId'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        $cartItem = [
            'id'    => $product['product_id'],
            'name'  => $product['name'],
            'price' => $product['price'],
            'qty'   => 1
        ];

        // If the product is already in the cart, update the quantity
        if (isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId]['qty']++;
        } else {
            $_SESSION['cart'][$productId] = $cartItem;
        }

        echo "<br> <p class='main_textSma'>Product '{$product['name']}' added to the cart.</p> <br>";
    }
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            echo "{$item['name']} - Quantity: {$item['qty']} - Price: \${$item['price']}<br>";
        }
    } else {
        echo "<p>Your cart is empty.</p>";
    }
    
    ?>
    <br>
    <p class="main_textSma">Where and when would you like to pick up your order?</p>
    <br>
    <form name="form" action="orderscart_script.php" onsubmit="return isvalid()" method="POST">
      <label>Location: </label>
      <select id="location" name="location">
        <option value="Lovell">LOVELL PARK, North ST</option>
        <option value="Hill">Harehill</option>
        <option value="Small store">Small store</option>
      </select>
      <label for="time">When? (date and time):</label>
      <input type="datetime-local" id="time" name="time">
      <input type="submit" id="btn" value="Submit" name = "submit"/>
    </form>
    <br>
</body>

