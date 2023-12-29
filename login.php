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
<div class="form_def" >
    <h1 class="">Login Form</h1>
    <form name="form" action="login_script.php" onsubmit="return isvalid()" method="POST">
      <label>Username: </label>
      <input type="text" id="user" name="user"></br></br>
      <label>Password: </label>
      <input type="password" id="pass" name="pass"></br></br>
      <input type="submit" id="btn" value="Login" name = "submit"/><br><br>
      <label>Would you like cookies?</label>
      <input type="checkbox" id="cookie" value="cookie" name="cookie">
    </form>
    <a href="register.php">Register</a>
    <a href="logout_script.php">Log out</a></a>
  </div>
<script>
  function isvalid() {
    var user = document.form.user.value;
    var pass = document.form.pass.value;
    if(user.length=="" || pass.length==""){
      alert("Username or password is empty.")
      return false
    }
  }
</script>
</body>

</html>