<?php
session_start();

if (isset($_SESSION['user_id'])) {
  $session_id = $_SESSION['user_id'];
    $db = new PDO('sqlite:company.db');
    $stmt = $db->query("DELETE FROM `agents` WHERE id='$session_id'");
    $stmt->execute();
    session_destroy();
}
header("location: agent.php");
?>