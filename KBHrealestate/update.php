<?php
$sPropertyId = $_GET['id'];

$sjProperties = file_get_contents('properties.json');
$jProperties = json_decode( $sjProperties );

if( $_POST ){

  $jProperties->$sPropertyId->price = $_POST['txtPrice'];
  // echo json_encode(  $jProperties );
  $sjProperties = json_encode($jProperties, JSON_PRETTY_PRINT);
  file_put_contents( 'properties.json', $sjProperties );
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="profile.css">
  <title>Update</title>
</head>
<body>

<nav> 
    <a href = "index.html"><img src="logo.png" alt="logo" class="logo"></a>
    <ul>
        <h3>+45 21 34 13 69</h3>
        <h4>kbhreinfo@kbhrealestate.dk</h4>
    </ul>

  <div class="container">
  <form action= "search.php">
      <input type="text" placeholder= "Enter city or ZIP code" name="search">
        <button type ="submit" class="buttonsubmit"><i class="fas fa-search"></i></button>
  </form>
</div>



<div class="sidenav">
<h1>Your Profile</h1>
<a href="agent-profile.php">Properties</a>
  <a href="api-update-profile.php">Update</a>
  <a href="api-delete-profile.php">Delete</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>
  


<form method="POST">
  <label>price</label>
  <input name="txtPrice" type="text" value="<?= $jProperties->$sPropertyId->price; ?>">
  <button class ="uploadbutton">SAVE</button>
  
</form>

  
</body>
</html>