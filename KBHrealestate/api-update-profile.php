
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



<div class="sidenav">
<h1>Your Profile</h1>
<a href="agent-profile.php">Properties</a>
  <a href="api-update-profile.php">Update</a>
  <a href="api-delete-profile.php">Delete</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>


<div class="update-form">
  <form action="api-update-profile.php" id="updateagent">

  <div>
        <input type="text" id="name" name="name" placeholder="Enter new name">
  </div>  
  <br>
  <br>

  <div>
        <input type="text" id="semail" name="semail" placeholder="Enter new email">
  </div>  
  <br>
  <br>
  <div>
        <input type="password" id="spassword" name="spassword" placeholder="Enter new password">
  </div>
  <br>
  <br>

  <div>
      <input type='submit' id='agent-submit' class='submitbutton' 
      value='SUBMIT'>
  </div>
  <?php
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $sName = $_POST['name'];
    $sEmail = $_POST['semail'];
    $sPassword = $_POST['spassword'];


    try{
        $db = new PDO('sqlite:company.db');
        $db->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $stmt = $db->prepare("UPDATE `agents` SET name='$sName', email='$sEmail', password='$sPassword' WHERE id='$user_id'");
        $stmt->execute();
        echo'{"id":"'.$sId.'"}';
        } catch (PDOException $ex ){

        echo '{"status": 0, "line": '.__LINE__.'}';
        exit;
    }
}?>
  </form>
</div>
</body>
</html>
