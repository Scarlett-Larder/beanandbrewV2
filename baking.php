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
            <h2 class="bake_textBig">Fancy Cupcake Class</h2>
            <p class="main_textSma">Learn and have fun while making our cupcakes, filled with jam.</p>
            <br>
            <i class="main_textSma">Hour Sessions, from 12 till 15</i>
            <p class="main_textSma">£40</p>
        </div>
        <div class="maingrid_sub sub_test">
            <img class="maingrid_img" src="img\bake_cupcake.jpg" width="600">
        </div>
    </div>

    <div class="main_grid main_bg">
        <div class="maingrid_sub">
            <h2 class="bake_textBig">Making Cinnamon roll</h2>
            <p class="main_textSma">Create a batch of our signature cinnamon rolls, with our professinal bakers.</p>
            <br>
            <i class="main_textSma">Hour Sessions, from 13 till 16</i>
            <p class="main_textSma">£40</p>
        </div>
        <div class="maingrid_sub sub_test">
            <img class="maingrid_img" src="img\main_baking.jpg" width="600">
        </div>
    </div>
    <div class="">
        <div class="maingrid_sub">
            <h2 class="bake_textBig bake_padding">More info</h2>
            <p class="main_textSma bake_padding">Avalible tuesday till saturday, at the times above.</p>
            <br>
        </div>
    </div>
    <p class="main_textSma bake_padding">Where and when would you like to pick up your order?</p>
    <br>
    <form name="form" action="baking_script.php" onsubmit="return isvalid()" method="POST" class="bake_padding">
      <label>Location: </label>
      <select id="location" name="location">
        <option value="Lovell">LOVELL PARK, North ST</option>
        <option value="Hill">Harehill</option>
        <option value="Small store">Small store</option>
      </select>
      <label>Lesson Type: </label>
      <select id="lesson" name="lesson">
        <option value="Cupcake">Fancy Cupcake Class</option>
        <option value="Cinnamon">Cinnamon Roll</option>
      </select>
      <label for="time">When? (date and time):</label>
      <input type="datetime-local" id="time" name="time">
      <input type="submit" id="btn" value="Submit" name = "submit"/>
    </form>
</body>

</html>
<?php 
    include("B_nav.php");
?>