<?php
include 'config.php';
 $id = $_POST ['id'];
 $username = $_POST ['username'];
 $email = $_POST ['email'];
 $pasword = $_POST ['password'];
 $cpasswprd = $_POST ['cpassword'];
 

 $query = "UPDATE reservasi SET username='$username', email='$email', password='$password', cpassword='$cpassword' WHERE id = '$id';";
 $sql = mysqli_query($conn, $query);
 header("location: payment.php");

?>