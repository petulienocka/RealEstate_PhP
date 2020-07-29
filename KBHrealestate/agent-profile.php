
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
      <input type="text" placeholder= "Search your property by address on map..." name="search">
        <button type ="submit" class="buttonsubmit"><i class="fas fa-search"></i></button>
  </form>
</div>
</nav>


<div class="sidenav">
<h1>Your Profile</h1>
  <a href="agent-profile.php">Properties</a>
  <a href="api-update-profile.php">Update Profile</a>
  <a href="api-delete-profile.php">Delete Profile</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

<form id = "uploadimage" action="upload.php" method="POST" enctype="multipart/form-data">
    <input name="txtPrice" type="text" placeholder="price">
    <input name="myFile" type="file">
    <button onclick="uploadImage()" class ="submitbutton1">UPLOAD PROPERTY</button>
  </form>

<script>
function uploadImage(){
  fetch('upload.php', {
    method : "POST",
    body : new FormData( document.getElementById ('uploadimage'))
  })
}
</script>

</body>
</html>