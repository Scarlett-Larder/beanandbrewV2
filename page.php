

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
        <div class="maingrid_sub main_padding">
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
    <div class="main_grid main_bg">
        <div class="maingrid_sub main_bg">
            <h2 class="main_textBig">Baking lessons</h2>
            <p class="main_textSma main_textS2">Check out our baking lessons, done by our professionals.</p>
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
    <div class="main_grid ">
        <div class="maingrid_sub main_padding">
            <h2 class="main_textBig">About us</h2>
            <p class="main_textSma main_textS2">Bean and brew was one of the first places to offer fair-traid coffee and have organic coffee, we heaviliy factor in sustainability into our identity and philophy.</p>
            <div class="flex space">
                <div>
                    <a href="aboutus.php" class="button">Find out more</a>
                </div>
            </div>
        </div>
        <div class="maingrid_sub sub_test">
            <img class="maingrid_img" src="img\main_about.jpg" width="600">
        </div>
    </div>
</body>

</html>
<?php 
    include("B_nav.php");
?>