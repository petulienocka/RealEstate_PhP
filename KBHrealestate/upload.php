<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<script src="http://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="profile.css">
    <title>UPLOAD</title>
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
  <?php
  
  $sUniqueImageName = uniqid();
  move_uploaded_file( $_FILES['myFile']['tmp_name'] , 
                      __DIR__."/images/$sUniqueImageName" );
  
  $sPrice = $_POST['txtPrice'];


  $jProperty = new stdClass();
  $jProperty->price = intVal($sPrice);
  $jProperty->image = $sUniqueImageName;
 
  $sjProperties = file_get_contents(__DIR__.'/properties.json');
  $jProperties = json_decode( $sjProperties );  
  $sPropertyUniqueId = uniqid();
  $jProperties->$sPropertyUniqueId = $jProperty;
 
  $sjProperties = json_encode($jProperties, JSON_PRETTY_PRINT);
  file_put_contents( __DIR__.'/properties.json', $sjProperties );

  ?>
   <a href="agent-profile.php"><button class ="uploadpropertybutton">Upload another property</button></a>
   <a href="properties.php"><button class ="viewpropertybutton">View properties</button></a>
  

</body>
</html>