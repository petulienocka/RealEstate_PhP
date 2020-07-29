<?php
session_start();
if ( ! empty($_POST ) ) {
  if (isset($_POST['semail'] ) && isset($_POST['spassword']) ) {
     
      $email = $_POST['semail'];
      $password = $_POST['spassword'];
    
      $db = new PDO('sqlite:company.db');
      $db->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      $stmt = $db->query("SELECT * FROM `users` WHERE email=?");
      $stmt->execute([$email]);

      $row = $stmt->fetch();

      $db_password = $row['password'];
      $user_id = $row['id']; 
    
    if ($_POST['password'] == $db_password) {
      $_SESSION['user_id'] = $user_id;
      header("location: user-profile.php");
      exit();
    }
    else {
      $_SESSION["errorMessage"] = "Invalid Credentials";
    }
  }
}
header("location: user.php");
?>