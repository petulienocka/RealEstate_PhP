<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="http://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="profile.css">
    <script src="app.js" type="text/javascript"></script>
    <title>Agent Profile</title>
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
  
  <div class="container">

    <a href="agent-profile.php"><button class ="anotherbutton">UPLOAD PROPERTY</button></a>
    

    <?php
    $sjProperties = file_get_contents(__DIR__.'/properties.json');
    $jProperties = json_decode( $sjProperties );

    $sBluePrint = '
    <div class="property">
      <div>PRICE ${{price}}</div>
      <img style="width: 600px; height: 400px;" src="images/{{path}}";">
      <a href="delete.php?id={{id}}">DELETE</a>
      <a href="update.php?id={{id}}">UPDATE</a>
    </div> 
    ';

    foreach( $jProperties as $skey => $jProperty ){
      $sCopyBluePrint = $sBluePrint;
      
      $sCopyBluePrint = str_replace( 
        ['{{price}}', '{{path}}', '{{id}}'],
        [$jProperty->price, $jProperty->image, $skey],
        $sCopyBluePrint
      );
      echo $sCopyBluePrint;
 
    }

    ?>
  </div>

</body>
</html>