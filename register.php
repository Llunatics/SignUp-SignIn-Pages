<?php
session_start();

$users = [];

if (isset($_POST['register'])) {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpass'];

    $emailExists = false;
    foreach ($users as $user) {
        if ($user['email'] === $email) {
            $emailExists = true;
            break;
        }
    }

    if ($emailExists) {
        $message = "<div class='message'>
            <p>Email ini sudah digunakan, silahkan gunakan email lain</p>
            </div><br>";
        $button = "<a href='javascript:self.history.back()'><button class='btn'>Kembali</button></a>";
    } else {
        if ($pass === $cpass) {
            $passwd = password_hash($pass, PASSWORD_DEFAULT);
            $users[] = ['username' => $name, 'email' => $email, 'password' => $passwd];

            $message = "<div class='message'>
                <p>Kamu sudah berhasil register!</p>
                </div><br>";
            $button = "<a href='login.php'><button class='btn'>Login sekarang</button></a>";
        } else {
            $message = "<div class='message'>
                <p>Password tidak sama.</p>
                </div><br>";
            $button = "<a href='register.php'><button class='btn'>Kembali</button></a>";
        }
    }
} 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <div class="topbar">
            <h4>Andiko Ramadani</h4>
        </div>

        <div class="container">
            <div class="form-box box">
                <header>Register</header>
                <hr>

                <?php if (isset($message) && isset($button)): ?>
                    <?php echo $message; ?>
                    <?php echo $button; ?>
                <?php endif; ?>

                <form action="#" method="POST">
                    <div class="form-box">
                        <?php if (!isset($_POST['register'])): ?>
                        <div class="input-container">
                            <i class="fa fa-user icon radius-left"></i>
                            <input class="input-field radius-right" type="text" placeholder="Username" name="username" required>
                        </div>

                        <div class="input-container">
                            <i class="fa fa-envelope icon radius-left"></i>
                            <input class="input-field radius-right" type="email" placeholder="Alamat Email" name="email" required>
                        </div>

                        <div class="input-container">
                            <i class="fa fa-lock icon radius-left"></i>
                            <input class="input-field password" type="password" placeholder="Password" name="password" required>
                            <i class="fa fa-eye icon toggle password-toggle radius-right"></i>
                        </div>

                        <div class="input-container">
                            <i class="fa fa-lock icon radius-left"></i>
                            <input class="input-field confirm-password" type="password" placeholder="Konfirmasi Password" name="cpass" required>
                            <i class="fa fa-eye icon toggle confirm-toggle radius-right"></i>
                        </div>
                    </div>

                    <center><input type="submit" name="register" id="submit" value="Register" class="btn"></center>

                    <div class="links">
                        Sudah memiliki akun? <a href="login.php">Login Sekarang</a>
                    </div>

                    <?php endif; ?>
                </form>
            </div>
        </div>

        <script src="js/script.js"></script>
    </body>
</html>
