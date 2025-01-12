<?php
session_start();

//username dan password
$valid_username = "admin";
$valid_password = "123456";

$message = "";

if (isset($_POST['login'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;
        header("location: home.php");
        exit();
    } else {
        $message = "<div class='message'><p>Username atau Password Salah</p></div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>
    <div class="topbar">
      <h4>Andiko Ramadani</h4>
    </div>

    <div class="container">
      <div class="form-box box">
        <header>Login</header>
        <hr>
        <form action="login.php" method="POST">
          <div class="form-box">
            <div class="input-container">
              <i class="fa fa-envelope icon radius-left"></i>
              <input class="input-field radius-right" type="text" placeholder="Username" name="username">
            </div>
            <div class="input-container">
              <i class="fa fa-lock icon radius-left"></i>
              <input class="input-field password" type="password" placeholder="Password" name="password">
              <i class="fa fa-eye toggle icon radius-right"></i>
            </div>
            <div class="remember">
              <input type="checkbox" class="check" name="remember_me">
              <label for="remember">Remember me</label>
              <span><a href="#">Forgot password</a></span>
            </div>
          </div>
          <?php echo $message; ?>
          <center><input type="submit" name="login" id="submit" value="Login" class="btn"></center>
          <div class="links">
            Belum punya akun? <a href="register.php">Register Sekarang</a>
          </div>
        </form>
      </div>
    </div>

    <script src="js/script.js"></script>
  </body>
</html>