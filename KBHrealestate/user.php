
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="user.css">
    <script src="http://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="user.js" type="text/javascript"></script>
    <title>USER</title>
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

<div class="container-1">
     <h5>Welcome Back !</h5>
  <form action="api-user-login.php" id="loginuser"method="post">
<div>
      <input type="text" id="semail" name="semail" placeholder="Enter your email" required>
</div>  
<br>
<br>
 <div>
      <input type="password" id="spassword" name="spassword" placeholder="Enter your password"required>
</div>  

<br>
<br>

<div>
    <input type='submit' id='user-login' class='userbutton'name='user-login'
     value='LOGIN'></a>
</div>
</form>
</div>

<div class="container-2">
     <h5>Get On Board</h5>
     <form method="post" id="signupuser" onsubmit="addUser(); return false;">

<div>
      <input type="text" id="name" name="name" placeholder="Enter your name"required>
</div>  
<br>
<br>

<div>
      <input type="text" id="email" name="email" placeholder="Enter your email"required>
</div>  
<br>
<br>
 <div>
      <input type="password" id="password" name="password" placeholder="Enter your password"required>
</div>  

<br>
<br>

<div>
    
    <button onclick="location.href='popupuser.php';"  id='agent-submit' class='submitbutton' >SUBMIT</button></a>
    
</div>

</form>
</div>

 </body>
</html>