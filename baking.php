<?php 
    include("connection.php");
?>
<?php 
    include("header.php");
?>
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
    <div class="main_grid">
        <div class="maingrid_sub">
            <h3 class="main_textMid">Try out our seasonal</h3>
            <h2 class="main_textBig">Pumpkin spice latte</h2>
            <div class="flex space">
                <div>
                    <a href="products.php" class="button">Go to item</a>
                </div>
            </div>
        </div>
        <div class="maingrid_sub sub_test">
            <img class="maingrid_img" src="img\main_img.jpg" width="600">
        </div>
    </div>
    <div class="main_grid">
        <div class="maingrid_sub">
            <h2 class="main_textBig">Baking lessons</h2>
            <p class="main_textSma">Check out our baking lessons, done by our professionals.</p>
            <div class="flex space">
                <div>
                    <a href="products.php" class="button">Check it out</a>
                </div>
            </div>
        </div>
        <div class="maingrid_sub sub_test">
            <img class="maingrid_img" src="img\main_baking.jpg" width="600">
        </div>
    </div>

    <div>
        <p>wow</p>
    </div>
</body>

</html>
<?php 
    include("B_nav.php");
?>