<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();


if (isset($_SESSION['username'])) {
    //header("Location: admin.php");
}
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = ($_POST['password']);
 
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="img/kopi.png" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
 
    <title>Login</title>
</head>
<body>
<div class="leaves">
                <div class="set">
                    <div><img src="img/leaf_01.png"></div>
                    <div><img src="img/leaf_02.png"></div>
                    <div><img src="img/leaf_03.png"></div>
                    <div><img src="img/leaf_04.png"></div>
                    <div><img src="img/leaf_01.png"></div>
                    <div><img src="img/leaf_02.png"></div>
                    <div><img src="img/leaf_03.png"></div>
                    <div><img src="img/leaf_04.png"></div>
                </div>
            </div>
    <div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error']?>
    </div>
 
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">
            <i class="fa-solid fa-mug-hot fa-bounce" style="color: #000000;"></i>
            Login</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">
                <i class="fa-solid fa-right-to-bracket" style="color: #ffffff;"></i>
                Login</button>
            </div>
        </form>
    </div>
</body>
</html>
