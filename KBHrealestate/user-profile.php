<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="http://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="profile.css">
    <script src="user.js" type="text/javascript"></script>
    <title>User Profile</title>
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
      <input type="text" placeholder= "Search your property by address on map..." name="search">
        <button type ="submit" class="buttonsubmit"><i class="fas fa-search"></i></button>
  </form>
</div>



<div class="sidenav">
<h1>Your Profile</h1>
  <a href="api-update-user-profile.php">Update</a>
  <a href="api-delete-user-profile.php">Delete</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

</body>
</html>