<?php 
session_start();
if(isset($_SESSION['login'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/login.css">
  <script src="js/prefixfree.min.js"></script>
  <title>Movex | Login </title>
</head>
<body>
  <form method="POST" action="Controller/index.php">
    <div class="body"></div>
      <div class="header">
        <div><a href=""><img src="images/logo@2x.png"></a></div>
      </div>
      <br>
      <div class="login">
        <input type="text" placeholder="Login" name="login" required>
        <input type="password" placeholder="mot de passe" name="pass" required><br /><br />
        <input type="submit" value="Login" name="submit">
        <br />
        <?php if (isset($_GET['err'])) {
            ?>
            <p style="color: red;">Login or password are incorrect ! Try again...</p> 
        <?php } ?>
      </div>

  </form>
  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
</body>
</html>
