<?php

$db = new PDO('sqlite:company.db');
$db->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

if (isset($_POST['email']) and isset($_POST['password'])){
	
// Assigning POST values to variables.
$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $db->query("SELECT * FROM `agents` WHERE email=? and password=?");
$stmt->execute([$email, $password]);

$count = 0;
while ($row = $stmt->fetch()) {
    $count = $count + 1;
}
if ($count == 1){

header("location: agent-profile.php");
}else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
}
}




?>