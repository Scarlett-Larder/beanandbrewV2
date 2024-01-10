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
    <h1 class="">Sign up Form</h1>
    <form name="form" action="register_script.php" onsubmit="return isvalid()" method="POST">
      <label>Username: </label>
      <input type="text" id="user" name="user" required></br></br>
      <label>Password: </label>
      <input type="password" id="pass" name="pass" required></br></br>
      <label>Email: </label>
      <input type="text" id="email" name="email" required></br></br>
      <label>Date: </label>
      <input type="date" id=bday name="bday"></br></br>
      <input type="submit" id="btn" value="Login" name = "submit"/><br><br>

    </form>
  </div>
<script>
  function isvalid() {
    var user = document.form.user.value;
    var pass = document.form.pass.value;
    var numbers = /[0-9]/g;
    if(user.length=="" || pass.length=="" || email.length=="" ){
      alert("Username or password is empty!")
      return false
    }
    else if(user.length <= 6 || pass.length <= 8){
      alert("Username or password is too short!")
      return false
    }
    if(!user.match(numbers) || !pass.match(numbers)){
      alert("No number in username or password!")
      return false
    }
    else{
      return true
    }

  }
</script>
</body>

</html>