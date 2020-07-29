<?php
session_start();
if ( ! empty($_POST ) ) {
  if (isset($_POST['email'] ) && isset($_POST['password']) ) {
      
      $email = $_POST['email'];
      $password = $_POST['password'];
      
      $db = new PDO('sqlite:company.db');
      $db->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      $stmt = $db->query("SELECT * FROM `agents` WHERE email=?");
      $stmt->execute([$email]);

      $row = $stmt->fetch();

      $db_password = $row['password'];
      $user_id = $row['id']; 
   
    if ($_POST['password'] == $db_password) {
      $_SESSION['user_id'] = $user_id;
      header("location: agent-profile.php");
      exit();
    }
    else {
      $_SESSION["errorMessage"] = "Invalid Credentials";
    }
  }
}
header("location: agent.php");
?>